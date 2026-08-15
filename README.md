# FrameX Skeleton

Fast API skeleton combining [Framework X](https://framework-x.org/), [Nette](https://nette.org/), and `contributte/framex`.

## Requirements

- PHP 8.4+
- [Composer](https://getcomposer.org/)

## Create a project

```bash
composer create-project -s dev contributte/framex-skeleton acme
cd acme
make project
make init
```

`make project` installs dependencies and prepares writable runtime directories. `make init` copies `config/local.neon.example` to `config/local.neon` for local parameter and service overrides.

## Run the API

```bash
make dev
```

The development server listens on <http://localhost:8000>.

## Endpoints

The configured API routes are:

| Method | Path | Purpose |
| --- | --- | --- |
| `GET` | `/v1/ping` | Ping endpoint |
| `POST` | `/v1/job` | Create a job |
| `GET` | `/v1/job` | List jobs |
| `PUT` | `/v1/job/{uuid}` | Update a job |
| `DELETE` | `/v1/job/{uuid}` | Delete a job |

## Quality checks

Run coding-standard and static-analysis checks:

```bash
make qa
```

Run tests:

```bash
make tests
```
