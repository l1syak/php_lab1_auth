# Лабораторная работа #1 (HTTP аутентификация)

## __Цель работы__

Спроектировать и разработать систему авторизации пользователей на протоколе HTTP.

__Функционал программы__

- функциональность входа/выхода.
- хранение паролей в хешированном виде (md5 с статичной солью)
- форма регистрации

## __Ход работы__

### 1) Я разработал пользовательский интерфейс.

![](https://github.com/l1syak/php_lab1_auth/blob/main/%D0%9F%D0%BE%D0%BB%D1%8C%D0%B7%D0%BE%D0%B2%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D1%81%D0%BA%D0%B8%D0%B5%20%D0%B2%D0%BE%D0%B7%D0%BC%D0%BE%D0%B6%D0%BD%D0%BE%D1%81%D1%82%D0%B8.png)

В данном интерфейсе пользователю доступны некоторые возмможности. При попадании на сайт, он оказывается на странице registerhtml.php. Он может или зарегистрироваться, или, если уже есть в базе данных, войти на сайт, нажав кнопку "Зарегистрированы?". После регистрации пользователь автоматически перенаправляется на страницу authhtml.php. При успешном входе страница обновляется и появляется надпись "Привет, "имя пользователя". Для выхода нажмите меня." После нажатия "меня" пользователя перенаправляют на страницу с авторизацией.

### 2) Описание хореографии программы
![](https://github.com/l1syak/php_lab1_auth/blob/main/%D0%A5%D0%BE%D1%80%D0%B5%D0%BE%D0%B3%D1%80%D0%B0%D1%84%D0%B8%D1%8F.png)

### 3) Описание струкруты базы данных 
![](https://github.com/l1syak/php_lab1_auth/blob/main/%D0%A1%D1%82%D1%80%D1%83%D0%BA%D1%82%D1%83%D1%80%D0%B0%20%D0%91%D0%94.png)

### 4) Описание алгоритмов

1) Алгоритм регистрации на сайте

![](https://github.com/l1syak/php_lab1_auth/blob/main/%D0%90%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC%20%D1%80%D0%B5%D0%B3%D0%B8%D1%81%D1%82%D1%80%D0%B0%D1%86%D0%B8%D0%B8.png)

2) Алгоритм входа на сайт

![](https://github.com/l1syak/php_lab1_auth/blob/main/%D0%90%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC%20%D0%B2%D1%85%D0%BE%D0%B4%D0%B0.png)

3) Алгоритм выхода с сайта

![](https://github.com/l1syak/php_lab1_auth/blob/main/%D0%90%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC%20%D0%B2%D1%8B%D1%85%D0%BE%D0%B4%D0%B0.png)
