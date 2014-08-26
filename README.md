# Symfony twig test

There is one command in this symfony app

`twig-error:hello`

The expected output is

`Hello Fred's name`

## See it correctly

    rm -rf app/cache
    ./app/console twig-error:hello

## See it wrongly

    ./app/console cache:clear
    ./app/console twig-error:hello
