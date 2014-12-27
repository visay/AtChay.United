AtChay.United
=============

How to install
--------------

* Clone the repository: `git clone https://github.com/visay/AtChay.United.git football.local`
* Install dependencies: `composer install`
* Create a virtual host - point your document root to the `Web` directory inside your project
* Create file `Settings.yaml` in `Configuration/Development/`

```Configuration/Development/Settings.yaml
TYPO3:
  Flow:
    persistence:
      backendOptions:
        host: 'localhost'
        dbname: 'YOUR-DATABASE-NAME'
        user: 'YOUR-DATABASE-USER'
        password: 'YOUR-DATABASE-USER-PASSWORD'
```

* Generate database migration: `./flow doctrine:migrate`
* Generate table for application: `./flow doctrine:update` - will be changed in the future
* Browse the url in the browser - the url defined in your virtual host
