<?php if(!defined('KIRBY')) exit ?>

title: Artist
pages: 
  hide: true
files: true
fields:
  title:
    label: Full Name
    type:  text
  bio:
    label: Artist's Bio
    type: textarea
    required: true
  short_bio:
    label: Short Bio
    type: textarea
    help: We'll use this on the homepage, if one is provided.
  link:
    label: Link
    type: url
