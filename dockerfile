FROM mysql

ENV MYSQL_DATABASE trucorp

COPY trucorp-db.sql /docker-entrypoint-initdb.d
