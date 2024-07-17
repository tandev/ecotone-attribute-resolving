The following issue occurs on warmup

`Uncaught Error: Attribute "Symfony\Component\DependencyInjection\Attribute\AutowireLocator" cannot target property (allowed targets: parameter)`

This attribute(`Symfony\Component\DependencyInjection\Attribute\AutowireLocator`) for example is allowed by symfony to be used for properties in a CPP definition

```php
 public function __construct(
        #[AutowireLocator(FooLocatedService::class)]
        private ContainerInterface $foos,
    ) {
    }
```
So i think this should be allowed by ecotone too
