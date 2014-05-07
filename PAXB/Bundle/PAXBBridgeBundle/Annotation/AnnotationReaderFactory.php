<?php


namespace PAXB\Bundle\PAXBBridgeBundle\Annotation;

use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\Common\Annotations\SimpleAnnotationReader;
use PAXB\Xml\Binding\AnnotationLoader;

class AnnotationReaderFactory {

    public function create() {
        $reader = new SimpleAnnotationReader();
        $reader->addNamespace(AnnotationLoader::ANNOTATIONS_NAMESPACE);

        return $reader;
    }
}