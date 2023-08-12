<?php

namespace Michi\JsonToClass\Command;

use Michi\JsonToClass\Converter\ClassConverter;
use Michi\JsonToClass\Converter\ImprovedClassConverter;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

// the name of the command is what users type after "php bin/console"
#[AsCommand(name: 'app:convert:improved')]
class ImprovedConvertCommand extends Command
{
    /**
     * @var array
     */
    protected $config;
    
    public function __construct(string $name = null, array $config = [])
    {
        $this->config = $config;
        parent::__construct($name);
    }
    
    
    protected function configure(): void
    {
        $this
            // the command help shown when running the command with the "--help" option
            ->setHelp('This command allows you to create a user...')
            ->addArgument('inputPath', InputArgument::REQUIRED, 'The path to the json file')
            ->addArgument('outputDir', InputArgument::REQUIRED, 'The path to the output directory')
            ->addOption('namespace', null, InputOption::VALUE_REQUIRED, 'The namespace of the generated classes', 'App\\JsonToClass\\Generated')
            ->addOption('rootObjectName', null, InputOption::VALUE_REQUIRED, 'The name of the root object', 'RootObject')
            ->addOption('attributePath', null, InputOption::VALUE_REQUIRED, 'The attribute path (dot notation) to convert', '')
            ->addOption('isList', null, InputOption::VALUE_REQUIRED, 'Is a list?', 0);
    }
    
    
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $inputPath = $input->getArgument('inputPath');
        $namespace = $input->getOption('namespace');
        $rootObjectName = $input->getOption('rootObjectName');
        $outputDir = $input->getArgument('outputDir');
        $attributePath = $input->getOption('attributePath');
        $isList = $input->getOption('isList');
        
        if (!file_exists($inputPath)) {
            $io->error('The input file does not exist');
            return Command::FAILURE;
        }
        
        $twig = $this->config['twig'];
        $data = json_decode(file_get_contents($inputPath), true);
        $classConverter = new ImprovedClassConverter($twig);
        $resultClass = $classConverter->convert(
            $data,
            $namespace,
            $rootObjectName,
            $attributePath,
            $isList,
            $outputDir
        );
        
        $io->success($resultClass);
        
        return Command::SUCCESS;
    }
}