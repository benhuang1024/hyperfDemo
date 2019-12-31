<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = 'hyperf/hyperf-skeleton';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'doctrine/annotations' => 'v1.8.0@904dca4eb10715b92569fbcd79e201d5c349b6bc',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'fig/http-message-util' => '1.1.3@35b19404371b31b3a43823c755398c48c9966db4',
  'guzzlehttp/guzzle' => '6.5.2@43ece0e75098b7ecd8d13918293029e555a50f82',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'hyperf/cache' => 'v1.1.11@6e310437383b6b53d5785631c910dc15d5b0f4bd',
  'hyperf/command' => 'v1.1.8@ed10f9554e0b3734a522a3a78500f83792bb0b4c',
  'hyperf/config' => 'v1.1.7@70f908602f7d5c26a9c08dd4df2469ee9fdf4778',
  'hyperf/contract' => 'v1.1.9@45adcd4a71211b6702235da2a198a08fe7a6c19d',
  'hyperf/database' => 'v1.1.12@9a84b2edd0a0c8878ff2658bec19a1178c2c4a46',
  'hyperf/db-connection' => 'v1.1.11@995a9b0b03b5250412eeb553f8936f05a2f72586',
  'hyperf/devtool' => 'v1.1.9@1803468044e2199cfc1bc175d3019fcdde59a7f4',
  'hyperf/di' => 'v1.1.9@63c80537a885b72eaacca1765f2b0882e47f04d7',
  'hyperf/dispatcher' => 'v1.1.3@3c077a025568c6f2b332dcf76df47b31c09b628c',
  'hyperf/event' => 'v1.1.3@227a4f79bbc6d42c05e1b35d93bc483f2dbd6e1b',
  'hyperf/exception-handler' => 'v1.1.6@cf8ea962dc11bb6588b15ec77c72935530f7a895',
  'hyperf/framework' => 'v1.1.8@de242033cec3aa16ee7e48547774dd5d91d7c612',
  'hyperf/guzzle' => 'v1.1.10@3dc0c9fe4d03a3a95afc4bd0887255cf86e2baa9',
  'hyperf/http-message' => 'v1.1.8@401717e1e42e39e88bf55867ea11e427d8216212',
  'hyperf/http-server' => 'v1.1.8@2c3f70f4881809590f8c68f5b3109e998e7d3020',
  'hyperf/logger' => 'v1.1.12@41439b0db17e676d0ea2ad8947037e643426db59',
  'hyperf/memory' => 'v1.1.3@b59ee60bbbc3b9fc1e0b32c9fae8579342991789',
  'hyperf/model-cache' => 'v1.1.11@b6e53eb7c0eb30e587b33ada63785242f4e08f78',
  'hyperf/model-listener' => 'v1.1.7@1728589f3cf96700b1f1004100f307f5b7b1cd11',
  'hyperf/paginator' => 'v1.1.7@b03201428585aadf5b6904feb12c9da5084f0bb2',
  'hyperf/pool' => 'v1.1.8@7da88454ea22cdde59cf828bccb0d8ad8c3dea71',
  'hyperf/process' => 'v1.1.7@aaf127673c1ec29021c8d047781e3bee4c4ca1eb',
  'hyperf/redis' => 'v1.1.8@8bd0926bc34f54b07bf859eec1017a32b49d3b82',
  'hyperf/server' => 'v1.1.7@de8c03ac40d616db2fb4aa515499d60989bd3d6c',
  'hyperf/utils' => 'v1.1.12@1630ba5f02693ad2d94a1f67a9d51d8b4e5b1528',
  'monolog/monolog' => '1.25.3@fa82921994db851a8becaf3787a9e73c5976b6f1',
  'nesbot/carbon' => '2.28.0@e2bcbcd43e67ee6101d321d5de916251d2870ca8',
  'nikic/fast-route' => 'v1.3.0@181d480e08d9476e61381e04a71b34dc0432e812',
  'nikic/php-parser' => 'v4.3.0@9a9981c347c5c49d6dfe5cf826bb882b824080dc',
  'php-di/phpdoc-reader' => '2.1.1@15678f7451c020226807f520efb867ad26fbbfcf',
  'phpoption/phpoption' => '1.7.2@77f7c4d2e65413aff5b5a8cc8b3caf7a28d81959',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/http-server-handler' => '1.0.1@aff2f80e33b7f026ec96bb42f63242dc50ffcae7',
  'psr/http-server-middleware' => '1.0.1@2296f45510945530b9dceb8bcedb5cb84d40c5f5',
  'psr/log' => '1.1.2@446d54b4cb6bf489fc9d75f55843658e6f25d801',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'symfony/console' => 'v4.4.2@82437719dab1e6bdd28726af14cb345c2ec816d0',
  'symfony/finder' => 'v4.4.2@ce8743441da64c41e2a667b8eb66070444ed911e',
  'symfony/polyfill-ctype' => 'v1.13.1@f8f0b461be3385e56d6de3dbb5a0df24c0c275e3',
  'symfony/polyfill-mbstring' => 'v1.13.1@7b4aab9743c30be783b73de055d24a39cf4b954f',
  'symfony/polyfill-php73' => 'v1.13.1@4b0e2222c55a25b4541305a053013d5647d3a25f',
  'symfony/service-contracts' => 'v2.0.1@144c5e51266b281231e947b51223ba14acf1a749',
  'symfony/translation' => 'v5.0.2@3ae6fad7a3dc2d99a023f9360184628fc44acbb3',
  'symfony/translation-contracts' => 'v2.0.1@8cc682ac458d75557203b2f2f14b0b92e1c744ed',
  'vlucas/phpdotenv' => 'v3.6.0@1bdf24f065975594f6a117f0f1f6cabf1333b156',
  'zendframework/zend-mime' => '2.7.2@c91e0350be53cc9d29be15563445eec3b269d7c1',
  'zendframework/zend-stdlib' => '3.2.1@66536006722aff9e62d1b331025089b7ec71c065',
  'composer/semver' => '1.5.0@46d9139568ccb8d9e7cdd4539cab7347568a5e2e',
  'composer/xdebug-handler' => '1.4.0@cbe23383749496fe0f373345208b79568e4bc248',
  'doctrine/cache' => '1.10.0@382e7f4db9a12dc6c19431743a2b096041bcdd62',
  'doctrine/collections' => '1.6.4@6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7',
  'doctrine/common' => 'v2.11.0@b8ca1dcf6b0dc8a2af7a09baac8d0c48345df4ff',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/persistence' => '1.3.3@99b196bbd4715a94fa100fac664a351ffa46d6a5',
  'doctrine/reflection' => 'v1.0.0@02538d3f95e88eb397a5f86274deb2c6175c2ab6',
  'friendsofphp/php-cs-fixer' => 'v2.16.1@c8afb599858876e95e8ebfcd97812d383fa23f02',
  'hamcrest/hamcrest-php' => 'v2.0.0@776503d3a8e85d4f9a1148614f95b7a608b046ad',
  'hyperf/testing' => 'v1.1.4@348ef9733d5da4a607245b6f80e08f44be8c9109',
  'jean85/pretty-package-versions' => '1.2@75c7effcf3f77501d0e0caa75111aff4daa0dd48',
  'mockery/mockery' => '1.3.1@f69bbde7d7a75d6b2862d9ca8fab1cd28014b4be',
  'myclabs/deep-copy' => '1.9.4@579bb7356d91f9456ccd505f24ca8b667966a0a7',
  'nette/bootstrap' => 'v3.0.1@b45a1e33b6a44beb307756522396551e5a9ff249',
  'nette/di' => 'v3.0.2@7ae47daa94b8dafbd0e8b6164e22e2d18d3e73ac',
  'nette/finder' => 'v2.5.1@14164e1ddd69e9c5f627ff82a10874b3f5bba5fe',
  'nette/neon' => 'v3.1.0@0a18fc88801a14d66587932de133eeca01f7ce8e',
  'nette/php-generator' => 'v3.3.1@4240fd7adf499138c07b814ef9b9a6df9f6d7187',
  'nette/robot-loader' => 'v3.2.1@d2a100e1f5cab390c78bc88709abbc91249c3993',
  'nette/schema' => 'v1.0.1@337117df1dade22e2ba1fdc4a4b832c1e9b06b76',
  'nette/utils' => 'v3.0.3@f1b5ce0fae07f13e066e64f9a8f59e53b8f4982e',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'pdepend/pdepend' => '2.6.1@395b0f356bc0881ef88864bffb4ba1423ca0d111',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'php-cs-fixer/diff' => 'v1.3.0@78bb099e9c16361126c86ce82ec4405ebab8e756',
  'phpdocumentor/reflection-common' => '2.0.0@63a995caa1ca9e5590304cd845c15ad6d482a62a',
  'phpdocumentor/reflection-docblock' => '4.3.4@da3fd972d6bafd628114f7e7e036f45944b62e9c',
  'phpdocumentor/type-resolver' => '1.0.1@2e32a6d48972b2c1976ed5d8967145b6cec4a4a9',
  'phpmd/phpmd' => '2.8.1@5664b95d484797582f5af9536238deb9ecde58a1',
  'phpspec/prophecy' => '1.10.1@cbe1df668b3fe136bcc909126a0f529a78d4cbbc',
  'phpstan/phpdoc-parser' => '0.3.5@8c4ef2aefd9788238897b678a985e1d5c8df6db4',
  'phpstan/phpstan' => '0.11.19@63cc502f6957b7f74efbac444b4cf219dcadffd7',
  'phpunit/php-code-coverage' => '6.1.4@807e6013b00af69b6c5d9ceb4282d0393dbb9d8d',
  'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e',
  'phpunit/php-token-stream' => '3.1.1@995192df77f63a59e47f025390d2d1fdf8f425ff',
  'phpunit/phpunit' => '7.5.18@fcf6c4bfafaadc07785528b06385cce88935474d',
  'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
  'sebastian/comparator' => '3.0.2@5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
  'sebastian/diff' => '3.0.2@720fcc7e9b5cf384ea68d9d930d480907a0c1a29',
  'sebastian/environment' => '4.2.3@464c90d7bdf5ad4e8a6aea15c091fec0603d4368',
  'sebastian/exporter' => '3.1.2@68609e1261d215ea5b21b7987539cbfbe156ec3e',
  'sebastian/global-state' => '2.0.0@e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4',
  'sebastian/object-enumerator' => '3.0.3@7cfd9e65d11ffb5af41198476395774d4c8a84c5',
  'sebastian/object-reflector' => '1.1.1@773f97c67f28de00d397be301821b06708fca0be',
  'sebastian/recursion-context' => '3.0.0@5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
  'sebastian/resource-operations' => '2.0.1@4d7a795d35b889bf80a0cc04e08d77cedfa917a9',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'swoft/swoole-ide-helper' => 'v4.4.8@dfbe372cca6baccd362bc276aa07c5d65b2c1b36',
  'symfony/config' => 'v5.0.2@7f930484966350906185ba0a604728f7898b7ba0',
  'symfony/dependency-injection' => 'v5.0.2@f9dbfbf487d08f60b1c83220edcd16559d1e40a2',
  'symfony/event-dispatcher' => 'v4.4.2@b3c3068a72623287550fe20b84a2b01dcba2686f',
  'symfony/event-dispatcher-contracts' => 'v1.1.7@c43ab685673fb6c8d84220c77897b1d6cdbe1d18',
  'symfony/filesystem' => 'v5.0.2@1d71f670bc5a07b9ccc97dc44f932177a322d4e6',
  'symfony/options-resolver' => 'v5.0.2@1ad3d0ffc00cc1990e5c9c7bb6b81578ec3f5f68',
  'symfony/polyfill-php70' => 'v1.13.1@af23c7bb26a73b850840823662dda371484926c4',
  'symfony/polyfill-php72' => 'v1.13.1@66fea50f6cb37a35eea048d75a7d99a45b586038',
  'symfony/process' => 'v5.0.2@ea2dc31b59d63abd9bc2356ac72eb7b3f3469f0e',
  'symfony/stopwatch' => 'v5.0.2@d410282956706e0b08681a5527447a8e6b6f421e',
  'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
  'webmozart/assert' => '1.6.0@573381c0a64f155a0d9a23f4b0c797194805b925',
  'hyperf/hyperf-skeleton' => 'v1.1.2@',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
