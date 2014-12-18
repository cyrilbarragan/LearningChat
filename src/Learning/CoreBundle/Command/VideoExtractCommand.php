<?php
namespace Learning\CoreBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Learning\CoreBundle\Utils\VideoExtractor;

class VideoExtractCommand extends ContainerAwareCommand
{
    private $rootDir;

    protected function configure()
    {
        $this
            ->setName('video:extract')
            ->setDescription('Extrait portion vidéo où les chats mangent')
            ->addArgument('serie', InputArgument::REQUIRED, 'Dans quelle série placer les videos (01 ou 02 etc..)?')
            ->addOption('dry', null, InputOption::VALUE_NONE, 'Afficher commandes')
            ->addOption('clear', null, InputOption::VALUE_NONE, 'Supprimer toutes les vidéos avants')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $container = $this->getContainer();
        $extractor = $container->get('learning_core.video_extractor');
        $this->rootDir = $container->get('kernel')->getRootDir();

        $serie = $input->getArgument('serie');

        if (!preg_match('/^\d{2}$/', $serie)) {
            throw new \Exception("Une série est composée de 2 chiffres (ex: 03)");
        }

        $extractor->setSerie($serie);

        if ($input->getOption('clear')) {
            $this->clearVideosClipped();
        }

        $extractor->process($input->getOption('dry'));

        $output->writeLn(implode("\n", $extractor->getCommandes()));

        $errors = $extractor->getErrors();
        if (!empty($errors)) {
            $output->writeLn("=================================");
            $output->writeLn("              ERREURS            ");
            $output->writeLn("=================================");

            foreach ($errors as $error) {
                $output->writeln($error);
            }
        }

        $infos = $extractor->getInfos();

        if (!empty($infos)) {
            $output->writeLn("=================================");
            $output->writeLn("              INFOS              ");
            $output->writeLn("=================================");

            foreach ($infos as $error) {
                $output->writeln($error);
            }
        }
    }

    protected function clearVideosClipped()
    {
        $path = $this->rootDir.'/../'.VideoExtractor::VIDEO_CLIPPED_PATH.'/*.mp4';
        foreach(glob($path) as $file){ // iterate files
          if(is_file($file))
            unlink($file); // delete file
        }
    }
}