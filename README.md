# db-seeder-app

## Configuration

### Environment variables

- Please, configure the environment variables in the `.env` file at the application's root.


### CycleBridge

- Database configuration file: `app/config/database.php`
- Migrations configuration file: `app/config/migration.php`
- Cycle ORM configuration file: `app/config/cycle.php`
- Documentation: `https://spiral.dev/docs/basics-orm`


## Usage

Read more about commands in the [Spiral documentation](https://spiral.dev/docs/console-commands).

## Console commands

#### To invoke application command just run:

```bash
php app.php db:seed
```

#### To get a list of available commands:

```bash
php app.php list
```

#### To get help about a particular command:

```bash
php app.php help create:user
```
