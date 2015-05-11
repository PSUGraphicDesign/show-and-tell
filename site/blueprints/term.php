<?php if(!defined('KIRBY')) exit ?>

title: Term
pages: event
files: true
fields:
  title:
    label: Term Name
    type:  text
  term:
    label: Term
    type: select
    options:
      - Fall
      - Winter
      - Spring
      - Summer
  classes_begin:
    label: Classes Begin
    type: date
  classes_end:
    label: Classes End
    type: date
  poster:
    label: Poster
    type: select
    options: images
