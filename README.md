
# E-ticket

Hello,


This project is intended to be an e-commerce web app through which a user can browse movies imported regulary from themoviedb (https://www.themoviedb.org/) through their API and can order tickets for the desired movies.

It is intended to be a fun and educational PHP application.

It uses Tailwind CSS (https://tailwindcss.com) for design.


## Run Locally

Clone the project

```bash
  git clone https://github.com/msandulache/eTicket.git
```

Go to the project directory

```bash
  cd eTicket
```

Build and start Docker containers

```bash
  docker compose up -d --build
```

Enter into php running container

```bash
  docker compose exec php bash
```

Install dependencies into vendor folder

```bash
  composer install
```


Now access in browser:

http://localhost:8080/


## For local database access


```bash
    docker-compose exec database /bin/bash
```

```bash
    mysql -u root -p e_ticket
```

```bash
    type secret as mysql password
```

## License

[MIT](https://choosealicense.com/licenses/mit/)


## Author

- [Marius Sandulache](https://github.com/msandulache)


## Feedback

If you have any feedback, please reach out to me at mariussandulache2015@gmail.com

