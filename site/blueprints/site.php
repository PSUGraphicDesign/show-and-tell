<?php if(!defined('KIRBY')) exit ?>

title: Site
pages:
files: images
fields:
  title:
    label: Site Name
    type: text
  text:
    label: Description
    type: textarea
    buttons: false
    help: >
      Keep this nice and concise! It'll be used in search engine results.
  copyright:
    label: Copyright Information
    type: textarea
    buttons: false
