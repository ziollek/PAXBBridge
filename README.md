PAXBBridge
==========

PAXB bridge for Symfony2

## Configuration

Add following lines to your composer.json file (section require):

        require: {
            ...

            "publib/PAXB": "dev-master",
            "publib/PAXBBridge": "dev-master",
        }


Add following repositories to your composer.json:

        "repositories": [
            {
                "type": "git",
                "url": "https://github.com/ziollek/PAXB.git"
            },
            {
                "type": "git",
                "url": "https://github.com/ziollek/PAXBBridge.git"
            },
        ]


Register bundle in app/Kernel.php ($bundles array)

        public function registerBundles()
        {
            $bundles = array(
                ....
                new \PAXB\Bundle\PAXBBridgeBundle\PAXBPAXBBridgeBundle(),
            );

Enjoy!