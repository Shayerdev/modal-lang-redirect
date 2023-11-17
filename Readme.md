# Relation page translation
#### Plugin for translate selected relation posts or pages by id. In order to implement the ability to show translation pages to the user, you must insert a shortcode into the content.

## Admin guide
- Install Plugin and activate him
- Create page|post for some languages
- Remember id page|post
- Append shortcode to display relation translate page|post

## Shortcode guide
```
[modal_lang_redirect lang="UK,EN" page="1,2"]
```
- Attribute lang set for display link in modal window for select translate page|post
- Attribute page set for select translate page
- You should also know that the sequence of listing pages is important as it is related to the sequence of languages ​​in the lang attribute

## Development guide
### Clone plugin repository
```bash
git clone https://github.com/Shayerdev/modal-lang-redirect.git
cd modal-lang-redirect
```
### Install development dependency.
```bash
composer install
```
### Update development dependency.
```bash
composer update
```
> **Warning:** <a href="https://getcomposer.org/" target="_blank">Composer</a> could have been installed in your machine. Check this by composer -h in terminal
### Update autoload files
```bash
composer build
```
### Test code format by PHP CodeSniffer (PSR-12)
```bash
vendor/bin/phpcs --standard=PSR12 ./src
```
### Autofix Code Format
```bash
vendor/bin/phpcbf --standard=PSR12 ./src
```
### For compile css/js you have must use Webpack
```bash
npm install
```
### For development webpack css/js
```bash
npm run watch
```
### For build webpack css/js
```bash
npm run build
```