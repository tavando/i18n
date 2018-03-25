<?php

return [

    'license_key' => 'Лицензионный ключ',
    'license_key_instruct' => 'Введите ключ для соответствующего домена из вашей [Статической учетной записи] (https: /account.statamic.com/licenses).',
        
    'locales' => 'Языки',
    'locales_instruct' => 'Языки, из которых будет доступен ваш сайт.',
        
    'timezone' => 'Часовой пояс',
    'timezone_instruct' => '[Часовой пояс] (http://php.net/manual/en/timezones.php) вы хотите, чтобы ваш сайт работал под.',
        
    'date_format' => 'Формат даты',
    'date_format_instruct' => 'Строка формата даты PHP, используемая при выводе неформатированных переменных даты.',
        
    'default_extension' => 'Расширение по умолчанию',
    'default_extension_instruct' => 'Расширение файла для ваших файлов содержимого.',
        
    'filesystems' => 'Файловые системы',
    'filesystems_instruct' => 'Определите, как и где будут доступны ваши различные файлы.',
        
    'app_key' => 'Ключ приложения',
    'app_key_instruct' => 'Этот ключ используется для защиты вашего приложения. Это должна быть сильная строка из 32 символов. ',
        
    'redactor' => 'Настройки Redactor',
    'redactor_instruct' => 'Представления YAML из [Настройка объектов редактора] (https://imperavi.com/assets/pdf/redactor-documentation-10.pdf). Каждый элемент будет доступен для выбора при создании поля Redactor. ',
        
    'protect' => 'Общесистемная защита',
    'protect_instruct' => 'Ввод схемы защиты здесь применит ее ко всему интерфейсу вашего сайта.',

    'csrf_exclude' => 'Исключенные URL-адреса CSRF',
    'csrf_exclude_instruct' => 'Список URL для исключения из CSRF-защиты',
        
    'php_max_memory_limit' => 'Ограничение максимальной памяти PHP',
    'php_max_memory_limit_instruct' => "Максимальный объем памяти. Статичность будет пытаться использовать при выполнении операций с интенсивной памятью, таких как манипуляция изображениями. \ nУбедитесь, что вы должны использовать как можно больше памяти. Вы можете указать байты или [PHP признанные сокращенные значения] (http: //php.net/manual/en/faq.using.php#faq.using.shorthandbytes). ",
];
