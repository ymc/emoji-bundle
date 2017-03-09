# YMCEmojiBundle

Provides a list of emojis in twig

### Usage
```twig
{{ emoji_groups().People[3] }}
```yaml

### Configuration

```yaml
ymc_emoji:
    definition_file: '%kernel.root_dir%/../app/Resources/config/emoji_list.json'
```
