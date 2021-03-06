# nadachat
simple secure chat with end to end encyption


## About
A simple and safe chat app using only php, css, js, and html. The application code is about 500 lines of Javascript and 150 of PHP, and with the libs included ([sjcl](https://github.com/bitwiseshiftleft/sjcl), [marked](https://github.com/chjj/marked), [rndme](https://github.com/rndme/rndme/), [js-sha3](https://github.com/emn178/js-sha3/)) about 5000 LOC. Designed to be easy to understand, distribute and customize, nadachat can be forked and branded, enjoyed online, or used as a starter for a more complicated secure application. As a web platform demo, nadachat uses `window.crypto`, `Worker()`s, `<script integrity>`, and CSP to stop XSS.

## Installing
Download the zip and extract to a web folder on apache, or clone the repo to the same.

You should also run an hourly cron job on a shell script to clear conversations files older than an hour:

```sh
find /PATH/TO/nadachat/api/inbox -mmin +60 -type f -name "*.key"\
  -exec rm -f {} \;
```


## Building (not needed to use)
If updating a JS lib or altering the _index template, you need to rebuild the application.

Once downloaded, run `npm install` to setup depends, and `npm run build` to re-generate SHA hash on _index/index.php.


## Contributing
Whether you're a designer, developer, technical writer, or cryptologist, you can likely make nadachat better for all. If you see something, say something; open an issue or whip up a pull request. Safety is the top priority above all else; don't contribute something that reduces safety. But if you can make it prettier, faster, smoother, more secure, or make these documentation pages more cogent, please don't be shy. This is a project the whole world should have a stake in.
