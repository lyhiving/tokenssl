<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita6578614760df065409f6ea0e41346aa
{
    public static $files = array (
        'a12da592622097d2b593a430e32e13fd' => __DIR__ . '/..' . '/nette/utils/src/loader.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'b' => 
        array (
            'blobfolio\\mimes\\' => 16,
            'blobfolio\\domain\\' => 17,
            'blobfolio\\common\\' => 17,
        ),
        'T' => 
        array (
            'Twig\\' => 5,
            'TokenSSL\\' => 9,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'R' => 
        array (
            'RomanPitak\\Nginx\\Config\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'blobfolio\\mimes\\' => 
        array (
            0 => __DIR__ . '/..' . '/token/blob-mimes/lib/blobfolio/mimes',
        ),
        'blobfolio\\domain\\' => 
        array (
            0 => __DIR__ . '/..' . '/token/blob-domain/lib/blobfolio/domain',
        ),
        'blobfolio\\common\\' => 
        array (
            0 => __DIR__ . '/..' . '/token/blob-common/lib/blobfolio/common',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'TokenSSL\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'RomanPitak\\Nginx\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/romanpitak/nginx-config-processor/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'L' => 
        array (
            'LTDBeget\\apacheConfigurator' => 
            array (
                0 => __DIR__ . '/..' . '/ltd-beget/apache-configurator/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Nette\\ArgumentOutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Bridges\\CacheDI\\CacheExtension' => __DIR__ . '/..' . '/nette/caching/src/Bridges/CacheDI/CacheExtension.php',
        'Nette\\Bridges\\CacheLatte\\CacheMacro' => __DIR__ . '/..' . '/nette/caching/src/Bridges/CacheLatte/CacheMacro.php',
        'Nette\\Bridges\\DatabaseDI\\DatabaseExtension' => __DIR__ . '/..' . '/nette/database/src/Bridges/DatabaseDI/DatabaseExtension.php',
        'Nette\\Bridges\\DatabaseTracy\\ConnectionPanel' => __DIR__ . '/..' . '/nette/database/src/Bridges/DatabaseTracy/ConnectionPanel.php',
        'Nette\\Caching\\Cache' => __DIR__ . '/..' . '/nette/caching/src/Caching/Cache.php',
        'Nette\\Caching\\IBulkReader' => __DIR__ . '/..' . '/nette/caching/src/Caching/IBulkReader.php',
        'Nette\\Caching\\IStorage' => __DIR__ . '/..' . '/nette/caching/src/Caching/IStorage.php',
        'Nette\\Caching\\OutputHelper' => __DIR__ . '/..' . '/nette/caching/src/Caching/OutputHelper.php',
        'Nette\\Caching\\Storages\\DevNullStorage' => __DIR__ . '/..' . '/nette/caching/src/Caching/Storages/DevNullStorage.php',
        'Nette\\Caching\\Storages\\FileStorage' => __DIR__ . '/..' . '/nette/caching/src/Caching/Storages/FileStorage.php',
        'Nette\\Caching\\Storages\\IJournal' => __DIR__ . '/..' . '/nette/caching/src/Caching/Storages/IJournal.php',
        'Nette\\Caching\\Storages\\MemcachedStorage' => __DIR__ . '/..' . '/nette/caching/src/Caching/Storages/MemcachedStorage.php',
        'Nette\\Caching\\Storages\\MemoryStorage' => __DIR__ . '/..' . '/nette/caching/src/Caching/Storages/MemoryStorage.php',
        'Nette\\Caching\\Storages\\NewMemcachedStorage' => __DIR__ . '/..' . '/nette/caching/src/Caching/Storages/NewMemcachedStorage.php',
        'Nette\\Caching\\Storages\\SQLiteJournal' => __DIR__ . '/..' . '/nette/caching/src/Caching/Storages/SQLiteJournal.php',
        'Nette\\Caching\\Storages\\SQLiteStorage' => __DIR__ . '/..' . '/nette/caching/src/Caching/Storages/SQLiteStorage.php',
        'Nette\\Database\\Connection' => __DIR__ . '/..' . '/nette/database/src/Database/Connection.php',
        'Nette\\Database\\ConnectionException' => __DIR__ . '/..' . '/nette/database/src/Database/exceptions.php',
        'Nette\\Database\\ConstraintViolationException' => __DIR__ . '/..' . '/nette/database/src/Database/exceptions.php',
        'Nette\\Database\\Context' => __DIR__ . '/..' . '/nette/database/src/Database/Context.php',
        'Nette\\Database\\Conventions\\AmbiguousReferenceKeyException' => __DIR__ . '/..' . '/nette/database/src/Database/Conventions/AmbiguousReferenceKeyException.php',
        'Nette\\Database\\Conventions\\DiscoveredConventions' => __DIR__ . '/..' . '/nette/database/src/Database/Conventions/DiscoveredConventions.php',
        'Nette\\Database\\Conventions\\StaticConventions' => __DIR__ . '/..' . '/nette/database/src/Database/Conventions/StaticConventions.php',
        'Nette\\Database\\DriverException' => __DIR__ . '/..' . '/nette/database/src/Database/DriverException.php',
        'Nette\\Database\\Drivers\\MsSqlDriver' => __DIR__ . '/..' . '/nette/database/src/Database/Drivers/MsSqlDriver.php',
        'Nette\\Database\\Drivers\\MySqlDriver' => __DIR__ . '/..' . '/nette/database/src/Database/Drivers/MySqlDriver.php',
        'Nette\\Database\\Drivers\\OciDriver' => __DIR__ . '/..' . '/nette/database/src/Database/Drivers/OciDriver.php',
        'Nette\\Database\\Drivers\\OdbcDriver' => __DIR__ . '/..' . '/nette/database/src/Database/Drivers/OdbcDriver.php',
        'Nette\\Database\\Drivers\\PgSqlDriver' => __DIR__ . '/..' . '/nette/database/src/Database/Drivers/PgSqlDriver.php',
        'Nette\\Database\\Drivers\\Sqlite2Driver' => __DIR__ . '/..' . '/nette/database/src/Database/Drivers/Sqlite2Driver.php',
        'Nette\\Database\\Drivers\\SqliteDriver' => __DIR__ . '/..' . '/nette/database/src/Database/Drivers/SqliteDriver.php',
        'Nette\\Database\\Drivers\\SqlsrvDriver' => __DIR__ . '/..' . '/nette/database/src/Database/Drivers/SqlsrvDriver.php',
        'Nette\\Database\\ForeignKeyConstraintViolationException' => __DIR__ . '/..' . '/nette/database/src/Database/exceptions.php',
        'Nette\\Database\\Helpers' => __DIR__ . '/..' . '/nette/database/src/Database/Helpers.php',
        'Nette\\Database\\IConventions' => __DIR__ . '/..' . '/nette/database/src/Database/IConventions.php',
        'Nette\\Database\\IRow' => __DIR__ . '/..' . '/nette/database/src/Database/IRow.php',
        'Nette\\Database\\IRowContainer' => __DIR__ . '/..' . '/nette/database/src/Database/IRowContainer.php',
        'Nette\\Database\\IStructure' => __DIR__ . '/..' . '/nette/database/src/Database/IStructure.php',
        'Nette\\Database\\ISupplementalDriver' => __DIR__ . '/..' . '/nette/database/src/Database/ISupplementalDriver.php',
        'Nette\\Database\\NotNullConstraintViolationException' => __DIR__ . '/..' . '/nette/database/src/Database/exceptions.php',
        'Nette\\Database\\ResultSet' => __DIR__ . '/..' . '/nette/database/src/Database/ResultSet.php',
        'Nette\\Database\\Row' => __DIR__ . '/..' . '/nette/database/src/Database/Row.php',
        'Nette\\Database\\SqlLiteral' => __DIR__ . '/..' . '/nette/database/src/Database/SqlLiteral.php',
        'Nette\\Database\\SqlPreprocessor' => __DIR__ . '/..' . '/nette/database/src/Database/SqlPreprocessor.php',
        'Nette\\Database\\Structure' => __DIR__ . '/..' . '/nette/database/src/Database/Structure.php',
        'Nette\\Database\\Table\\ActiveRow' => __DIR__ . '/..' . '/nette/database/src/Database/Table/ActiveRow.php',
        'Nette\\Database\\Table\\GroupedSelection' => __DIR__ . '/..' . '/nette/database/src/Database/Table/GroupedSelection.php',
        'Nette\\Database\\Table\\IRow' => __DIR__ . '/..' . '/nette/database/src/Database/Table/IRow.php',
        'Nette\\Database\\Table\\IRowContainer' => __DIR__ . '/..' . '/nette/database/src/Database/Table/IRowContainer.php',
        'Nette\\Database\\Table\\Selection' => __DIR__ . '/..' . '/nette/database/src/Database/Table/Selection.php',
        'Nette\\Database\\Table\\SqlBuilder' => __DIR__ . '/..' . '/nette/database/src/Database/Table/SqlBuilder.php',
        'Nette\\Database\\UniqueConstraintViolationException' => __DIR__ . '/..' . '/nette/database/src/Database/exceptions.php',
        'Nette\\DeprecatedException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\DirectoryNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\FileNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\IOException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\InvalidArgumentException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\InvalidStateException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Iterators\\CachingIterator' => __DIR__ . '/..' . '/nette/utils/src/Iterators/CachingIterator.php',
        'Nette\\Iterators\\Mapper' => __DIR__ . '/..' . '/nette/utils/src/Iterators/Mapper.php',
        'Nette\\LegacyObject' => __DIR__ . '/..' . '/nette/utils/src/Utils/LegacyObject.php',
        'Nette\\Localization\\ITranslator' => __DIR__ . '/..' . '/nette/utils/src/Utils/ITranslator.php',
        'Nette\\MemberAccessException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\NotImplementedException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\NotSupportedException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\OutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\SmartObject' => __DIR__ . '/..' . '/nette/utils/src/Utils/SmartObject.php',
        'Nette\\StaticClass' => __DIR__ . '/..' . '/nette/utils/src/Utils/StaticClass.php',
        'Nette\\StaticClassException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\UnexpectedValueException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\ArrayHash' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayHash.php',
        'Nette\\Utils\\ArrayList' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayList.php',
        'Nette\\Utils\\Arrays' => __DIR__ . '/..' . '/nette/utils/src/Utils/Arrays.php',
        'Nette\\Utils\\AssertionException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Callback' => __DIR__ . '/..' . '/nette/utils/src/Utils/Callback.php',
        'Nette\\Utils\\DateTime' => __DIR__ . '/..' . '/nette/utils/src/Utils/DateTime.php',
        'Nette\\Utils\\FileSystem' => __DIR__ . '/..' . '/nette/utils/src/Utils/FileSystem.php',
        'Nette\\Utils\\Finder' => __DIR__ . '/..' . '/nette/finder/src/Utils/Finder.php',
        'Nette\\Utils\\Html' => __DIR__ . '/..' . '/nette/utils/src/Utils/Html.php',
        'Nette\\Utils\\IHtmlString' => __DIR__ . '/..' . '/nette/utils/src/Utils/IHtmlString.php',
        'Nette\\Utils\\Image' => __DIR__ . '/..' . '/nette/utils/src/Utils/Image.php',
        'Nette\\Utils\\ImageException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Json' => __DIR__ . '/..' . '/nette/utils/src/Utils/Json.php',
        'Nette\\Utils\\JsonException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\ObjectHelpers' => __DIR__ . '/..' . '/nette/utils/src/Utils/ObjectHelpers.php',
        'Nette\\Utils\\ObjectMixin' => __DIR__ . '/..' . '/nette/utils/src/Utils/ObjectMixin.php',
        'Nette\\Utils\\Paginator' => __DIR__ . '/..' . '/nette/utils/src/Utils/Paginator.php',
        'Nette\\Utils\\Random' => __DIR__ . '/..' . '/nette/utils/src/Utils/Random.php',
        'Nette\\Utils\\Reflection' => __DIR__ . '/..' . '/nette/utils/src/Utils/Reflection.php',
        'Nette\\Utils\\RegexpException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Strings' => __DIR__ . '/..' . '/nette/utils/src/Utils/Strings.php',
        'Nette\\Utils\\UnknownImageFileException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Validators' => __DIR__ . '/..' . '/nette/utils/src/Utils/Validators.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita6578614760df065409f6ea0e41346aa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita6578614760df065409f6ea0e41346aa::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita6578614760df065409f6ea0e41346aa::$prefixesPsr0;
            $loader->classMap = ComposerStaticInita6578614760df065409f6ea0e41346aa::$classMap;

        }, null, ClassLoader::class);
    }
}
