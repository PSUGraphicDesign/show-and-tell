<?php if(!defined('KIRBY')) exit ?>

title: About
pages:
  hide: true
files: images
fields:
  title:
    label: Title
    type: text
  text:
    label: Text
    type: textarea
  details:
    label: Details
    type: textarea
    buttons: false
  department_logos:
    label: Departments
    type: structure
    entry: >
      {{department}}
    fields:
      department:
        label: Department Name
        type: text
        required: true
      logo:
        label: Logo
        type: select
        options: images
