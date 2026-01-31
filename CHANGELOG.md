# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [2.0.1] - 2024

### Added
- PageBuilder template filter bypass for DataPatchCreator module to prevent content corruption
- Plugin `Template` intercepting `\Magento\PageBuilder\Model\Filter\Template::filter()` method
- Automatic detection of DataPatchCreator module context via HTTP request controller module name
- Raw content preservation when exporting PageBuilder content to data patches
- Prevents unwanted variable interpolation and directive processing during patch generation

### Fixed
- PageBuilder content being processed by template engine when generating data patches
- Loss of PageBuilder directives and variables during YAML export
- Content mangling caused by filter execution on PageBuilder HTML/JSON content

### Technical Details
- Only applies bypass when request originates from `Qoliber_DataPatchCreator` module
- Returns unprocessed `$result` string instead of calling `$proceed()` when in DataPatchCreator context
- Implements `aroundFilter()` plugin pattern for minimal performance impact
- Requires dependency on `qoliber/m2-datapatchcreator` module
- Configured via `etc/adminhtml/di.xml` for admin area only
- PHP 8.1+ compatibility
