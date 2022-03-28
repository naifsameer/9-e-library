# E Library project (php 8 and mvc);

## commands to create the database and tables run this

```bash
composer create-db
```

## insert fake data

```bash
composer fake-data
```

## run the project

```bash
composer serve
```

## Project role follow it bro :)

### controller methods should be static

Becurse the behavior behind Router::resolve();

### name

| What           | How                                  | Good                    |
| -------------- | ------------------------------------ | ----------------------- |
| Controller     | singular                             | ArticleController       |
| -              | -                                    | -                       |
| Route          | plural                               | articles/1              |
| -              | -                                    | -                       |
| Model          | singular                             | User                    |
| Model property | snake_case                           | $model->created_at      |
| -              | -                                    | -                       |
| Table          | plural                               | article_comments        |
| Table column   | snake_case without model name        | title                   |
| -              | -                                    | -                       |
| Primary key    | -                                    | id                      |
| Foreign key    | singular model name with \_id suffix | article_id              |
| -              | -                                    | -                       |
| Method         | camelCase                            | getAll                  |
| Variable       | camelCase                            | $articlesWithAuthor     |
| -              | -                                    | -                       |
| View           | kebab-case                           | show-filtered.blade.php |
| -------------- | ------------------------------------ | ----------------------- |

### controller and router

| Verb      | URI                    | Action  |
| --------- | ---------------------- | ------- |
| GET       | `/photos`              | index   |
| GET       | `/photos/create`       | create  |
| GET       | `/photos/{photo}`      | show    |
| GET       | `/photos/{photo}/edit` | edit    |
| POST      | `/photos`              | store   |
| PUT/PATCH | `/photos/{photo}`      | update  |
| DELETE    | `/photos/{photo}`      | destroy |
