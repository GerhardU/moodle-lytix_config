# lytix\_config

This plugin is a subplugin of [local_lytix](https://github.com/llttugraz/moodle-local_lytix).  
The `lytix_config` module handles the configuration of the main plugin, enabling it to work in combination with various sub-modules across different Moodle instances.

## Installation

1. Download the plugin and extract the files.
2. Move the extracted folder to your `moodle/local/lytix/modules` directory.
3. Log in as an admin in Moodle and navigate to `Site Administration > Plugins > Install plugins`.
4. Follow the on-screen instructions to complete the installation.

## Requirements

- Moodle Version: 4.1+
- PHP Version: 7.4+
- Supported Databases: MariaDB, PostgreSQL
- Supported Moodle Themes: Boost

## Features

- `lytix_config` uses a specific template for different platforms to ensure seamless integration with the sub-modules.
- The template for the **Creators Dashboard is not availabe** for the public because of dependecies to 3d party plugins.
- Based on the chosen dashboard version in the admin settings for the main plugin `local_lytix`, the appropriate Mustache template is loaded.

## Configuration

No settings for the subplugin are available.

## API Documentation

No API.

## Privacy

No personal data are stored.

## Dependencies

- [local_lytix](https://github.com/llttugraz/moodle-local_lytix)
- [lytix_logs](https://github.com/llttugraz/moodle-lytix_logs)
- [lytix_timeoverview](https://github.com/llttugraz/moodle-lytix_timeoverview)

Depending on the chosen dashboard setting additional dependencies are given.

For `learners corner`:

- [lytix_activity](https://github.com/llttugraz/moodle-lytix_activity)
- [lytix_diary](https://github.com/llttugraz/moodle-lytix_diary)
- [lytix_planner](https://github.com/llttugraz/moodle-lytix_planner)
- [lytix_grademonitor](https://github.com/llttugraz/moodle-lytix_grademonitor) (only optional, only supported for Moodle version <= 4.1)

For `course dashboard`:

- [lytix_completion](https://github.com/llttugraz/moodle-lytix_completion)
- [lytix_measure](https://github.com/llttugraz/moodle-lytix_measure)
- [lytix_planner](https://github.com/llttugraz/moodle-lytix_planner)
- [lytix_timedetail](https://github.com/llttugraz/moodle-lytix_timedetail) (not available on GitHub)


For `creators dashboard`:

- lytix_actions (not available on GitHub)
- lytix_completions (not available on GitHub)
- lytix_coursecompl (not available on GitHub)
- lytix_participants (not available on GitHub)


## License

This plugin is licensed under the [GNU GPL v3](https://github.com/llttugraz/moodle-lytix_config?tab=GPL-3.0-1-ov-file).

## Contributors

- **Günther Moser** - Developer - [GitHub](https://github.com/ghinta)
- **Alex Kremser** - Developer
