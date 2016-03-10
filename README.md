# Can I Ride?

Can I Ride is a simple PHP web app that tells outdoor recreationalists if they can use trails that are available on odd or even days. 

## Contributing

I would love for people to build out new cities or improve functionality. Follow these simple steps if you care to contribute.

1. Fork the project & clone locally.
2. Create an upstream remote and sync your local copy before you branch.
3. Branch for each separate piece of work.
4. Do the work and write good commit messages.
5. Push to your origin repository.
6. Create a new PR in GitHub.

"The work" would likely involve creating a new folder in the `app` directory with a city name (eg. denver), adding an index.php to it, and adding trails.

## Getting Started

### The Basics

This repo contains a gulp script that:
1. Spins up a PHP server
2. Looks for PHP files and places them in the `dist` directory
3. Compiles the Bootstrap framework for styling. 

### Dependencies

- [Node](https://nodejs.org/en/) & npm
- Bower `npm install -g bower`

### Setup

1. Fork the project & clone locally.
2. `cd` into the project.
3. Run `npm install`
4. Run `bower install`
5. Run `gulp build`
6. Run `gulp watch`

The `gulp watch` command will watch files and reload the browser when changes are made. 
