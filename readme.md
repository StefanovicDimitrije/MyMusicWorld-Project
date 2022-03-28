# MyMusicWorld Project

This is a project I had been tasked to make at my collega using mostly PHP

## The idea

My idea is to utilize Spotify's API to simulate a website about reviewing, sharing, and talking about music - similar to rateyourmusic.com

## The goal

My goal is to learn API connection and utilise it effectively in PHP, expirience and immerse myself in PHP development, learn SQLi and how it connects with PHP and to make and design a full stack web app by myself

## Installation

After you clone the repo and put it into your local server of choice you also require [fake sendmail](https://www.glob.com.au/sendmail/) which I've used as a simple mailer server in order to simulate the e-mail confirmation of, for example, creating a new account

## Libraries and Frameworks used

To model the front end side of the application, which is still in the form of the `.php` file, I've used:

  1. Tailwindcss
     - Used for styling and some user-made components from the web which utilise it
  2. JQuery
     - Some AJAX requests and DOM manipulation
  3. Fontawesome

The back end consists of the `.php` code inside the webpages and some that are used purley for requests. Some of the techonologies used here are:

  4. cURL and API fetching
  5. password_hash() ( *using bcrypt* )
  6. mail()
  7. MySQLi
