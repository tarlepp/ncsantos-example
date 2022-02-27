# What is this?

Someone had problems with serializer and enum types, so I created this repository to
demonstrate that it works as expected.

## Installation and testing

1. Close this repository
2. Run `composer install`
3. Run `symfony serve`
4. Open `http://localhost:8080/` in your browser and confirm that you get `{}` response
5. Open `http://localhost:8080/_profiler/` in your browser and click that latest request
6. Confirm that `dump` part on `debug` tab

## License

MIT
