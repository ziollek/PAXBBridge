<?php


namespace PAXB\Bundle\PAXBBridgeBundle\Annotation;


use Doctrine\Common\Annotations\AnnotationRegistry;

class AnnotationDriver
{
    public static function registerAnnotationClasses()
    {
        $reflector = new \ReflectionClass('\PAXB\Setup');

        foreach (glob(dirname($reflector->getFileName()) . '/Xml/Binding/Annotations/*.php') as $annotationFile) {
            AnnotationRegistry::registerFile($annotationFile);
        }
    }
}