Demo repo of an issue that Statamic 5.19 introduced with the `select` param on the `nav` tag.

In `composer.json` the `statamic/cms` version is hard-coded.

On 5.18, you see the "Expected" results.

Change this to 5.19 and you see incorrect results.

If you rollback the changes to `src/Data/BulkAugmentor.php` in #10226, the 5.19 results appear like 5.18.
