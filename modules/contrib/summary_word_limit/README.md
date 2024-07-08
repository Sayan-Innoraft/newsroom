# Summary Word Limit

This simple module allows you to add a word count limit to the summary of
`text_with_summary`, AKA the _Text (formatted, long, with summary)_, field
types.

This is enabled via third party settings on the field config, and implemented
using a validation constraint.

For a full description of the module, visit the
[project page](https://www.drupal.org/project/summary_word_limit).

Submit bug reports and feature suggestions, or track changes in the
[issue queue](https://www.drupal.org/project/issues/summary_word_limit).


## Requirements

This module requires no modules outside of Drupal core.


## Installation

Install as you would normally install a contributed Drupal module. For further
information, see
[Installing Drupal Modules](https://www.drupal.org/docs/extending-drupal/installing-drupal-modules).


## Configuration

To set a word count limit for the summary, edit a _Text (formatted, long,
with summary)_ field and enter a number in the _Summary word limit count_ field.
Be sure to check the _Summary input_ box if necessary.

For example, to limit the _Basic page_ summary length:

1. Navigate to Administration > Extend and enable the module.
2. Navigate to Administration > Structure > Content types > Basic page > Manage fields > Body > Edit.
   Check the_Summary input_ box.
3. Set maximum number of words allowed in the _Summary word limit count_ box.
4. Click _Save settings_.


## Maintainers

- jeffam - [jeffam](https://www.drupal.org/u/jeffam)
- Aaron Froehlich - [a-fro](https://www.drupal.org/u/a-fro)
- Vladimir Roudakov - [VladimirAus](https://www.drupal.org/u/vladimiraus)
