# Delete My Account

## Installation

Options for users to delete their account will display under the profile tab in the UCP instead of it's own tab per the original extension.

[![Build Status](https://travis-ci.org/rmcgirr83/deletemyaccount.svg?branch=master)](https://travis-ci.org/rmcgirr83/deletemyaccount)

## Installation

### 1. clone
Clone (or download and move) the repository into the folder ext/brokencrust/deletemyaccount:

```
cd phpBB3
git clone https://github.com/rmcgirr83/deletemyaccount.git ext/brokencrust/deletemyaccount/
```

### 2. activate
Go to "ACP" > "Customise" > "Extensions" and enable the "Delete My Account" extension.

(optional) Set "Can delete posts when deleting account" to Yes for any user or group that you wish to have this option.

## Update instructions:
1. Go to your phpBB-Board > Admin Control Panel > Customise > Manage extensions > Delete My Account: disable and delete data (this is IMPORTANT)
2. Delete all files of the extension from ext/brokencrust/deletemyaccount
3. Upload all the new files to the same location
4. Go to your phpBB-Board > Admin Control Panel > Customise > Manage extensions > Delete My Account: enable

## License

[GPLv2-only](license.txt)
