# Accessible Minimalism WordPress Theme

Minimalist WordPress theme with a penchant for accessibility.

Inspired by the [Accessible Minimalism Hugo Theme](https://github.com/leonstafford/accessible-minimalism-hugo-theme).

## Project aims

 - XHTML 1.0 Strict valid and HTML 5 friendly code
 - minimal bloat in the generated markup
 - focus on accessibility
   - semantic, minimal markup for screen readers
   - minimal added CSS for partially sighted users
   - easy to read source code
   - minimal config required to get started and use in Hugo
 - RSS subscription support
 - favors fully-blind users over partially or fully sighted users
 - mobile-last development 

## Who is this for?

This aims at users who care more about content and inclusivity than dancing baby
 GIFs or whatever the 2020 equivalent is.

The early web was great for content, unburdened by MBs of JavaScript or CSS.
 RSS feeds allowed users to pull your content on demand vs being forced into
 giving you space in their precious inbox or following your social-ills.

## Getting started

TBC

## Configuration

TBC

## Development decisions

 - skip redundancy such as anchor's `title` attributes
 - default browser colors are high contrast enough

## Screenshot

[![Screenshot](https://github.com/leonstafford/accessible-minimalism-hugo-theme/blob/master/images/screenshot.png?cb=1234)](https://github.com/leonstafford/accessible-minimalism-hugo-theme/blob/master/images/screenshot.png)

## Testing

 - check theme against [w3c validator](https://validator.w3.org)
 - check using a new [Lokl](https://lokl.dev) site
 - check navigation and content in `lynx(1)` browser
 - check navigation and content in screen reader(s)
 - test accessibility in sites like:
   - [wave](https://wave.webaim.org/report#/https://accessible-minimalism.netlify.app)
   - [achecked](https://achecker.ca)

## Roadmap

 - add a demo site, also serves as test site for validators / theme homepage
 - theme options / config help for enabling footer links to email, RSS, socials

### License

[The Unlicense](https://unlicense.org) - do whatever you like with this code.
