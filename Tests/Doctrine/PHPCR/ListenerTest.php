<?php

namespace Fazland\ElasticaBundle\Tests\Doctrine\PHPCR;

use Fazland\ElasticaBundle\Tests\Doctrine\ListenerTest as BaseListenerTest;

class ListenerTest extends BaseListenerTest
{
    public function setUp()
    {
        if (!class_exists('Doctrine\ODM\PHPCR\DocumentManager')) {
            $this->markTestSkipped('Doctrine PHPCR is not available.');
        }
    }

    protected function getClassMetadataClass()
    {
        return 'Doctrine\ODM\PHPCR\Mapping\ClassMetadata';
    }

    protected function getLifecycleEventArgsClass()
    {
        return 'Doctrine\Common\Persistence\Event\LifecycleEventArgs';
    }

    protected function getListenerClass()
    {
        return 'Fazland\ElasticaBundle\Doctrine\Listener';
    }

    protected function getObjectManagerClass()
    {
        return 'Doctrine\ODM\PHPCR\DocumentManager';
    }
}
