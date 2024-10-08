<?php
/**
 * Customer completed order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-completed-order.php.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 3.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$order = wc_get_order( $order_id );
$total_quantity = 0;

// Подсчитываем общее количество товаров в заказе
foreach ( $order->get_items() as $item ) {
    $total_quantity += $item->get_quantity();
}

$element = get_element_name($total_quantity);

function get_element_name($number) {
    $elements = [
        1 => 'Водород', 2 => 'Гелий', 3 => 'Литий', 4 => 'Бериллий', 5 => 'Бор',
        6 => 'Углерод', 7 => 'Азот', 8 => 'Кислород', 9 => 'Фтор', 10 => 'Неон',
        11 => 'Натрий', 12 => 'Магний', 13 => 'Алюминий', 14 => 'Кремний', 15 => 'Фосфор',
        16 => 'Сера', 17 => 'Хлор', 18 => 'Аргон', 19 => 'Калий', 20 => 'Кальций',
        21 => 'Скандий', 22 => 'Титан', 23 => 'Ванадий', 24 => 'Хром', 25 => 'Марганец',
        26 => 'Железо', 27 => 'Кобальт', 28 => 'Никель', 29 => 'Медь', 30 => 'Цинк',
        31 => 'Галлий', 32 => 'Германий', 33 => 'Мышьяк', 34 => 'Селен', 35 => 'Бром',
        36 => 'Криптон', 37 => 'Рубидий', 38 => 'Стронций', 39 => 'Иттрий', 40 => 'Цирконий',
        41 => 'Ниобий', 42 => 'Молибден', 43 => 'Технеций', 44 => 'Рутений', 45 => 'Родий',
        46 => 'Палладий', 47 => 'Серебро', 48 => 'Кадмий', 49 => 'Индий', 50 => 'Олово',
        51 => 'Сурьма', 52 => 'Теллур', 53 => 'Иод', 54 => 'Ксенон', 55 => 'Цезий',
        56 => 'Барий', 57 => 'Лантан', 58 => 'Церий', 59 => 'Празеодим', 60 => 'Неодим',
        61 => 'Прометий', 62 => 'Самарий', 63 => 'Европий', 64 => 'Гадолиний', 65 => 'Тербий',
        66 => 'Диспрозий', 67 => 'Гольмий', 68 => 'Эрбий', 69 => 'Тулий', 70 => 'Иттербий',
        71 => 'Лютеций', 72 => 'Гафний', 73 => 'Тантал', 74 => 'Вольфрам', 75 => 'Рений',
        76 => 'Осмий', 77 => 'Иридий', 78 => 'Платина', 79 => 'Золото', 80 => 'Ртуть',
        81 => 'Таллий', 82 => 'Свинец', 83 => 'Висмут', 84 => 'Полоний', 85 => 'Астат',
        86 => 'Радон', 87 => 'Франций', 88 => 'Радий', 89 => 'Актиний', 90 => 'Торий',
        91 => 'Протактиний', 92 => 'Уран', 93 => 'Нептуний', 94 => 'Плутоний', 95 => 'Америций',
        96 => 'Кюрий', 97 => 'Берклий', 98 => 'Калифорний', 99 => 'Эйнштейний', 100 => 'Фермий',
        101 => 'Менделевий', 102 => 'Нобелий', 103 => 'Лоуренсий', 104 => 'Резерфордий', 105 => 'Дубний',
        106 => 'Сиборгий', 107 => 'Борий', 108 => 'Хассий', 109 => 'Мейтнерий', 110 => 'Дармштадтий',
        111 => 'Рентгений', 112 => 'Коперниций', 113 => 'Нихоний', 114 => 'Флеровий', 115 => 'Московий',
        116 => 'Ливерморий', 117 => 'Теннесин', 118 => 'Оганесон'
    ];
    return isset($elements[$number]) ? $elements[$number] : 'Неизвестный элемент';
}

// Выводим элемент в письме
echo '<p>' . __('Element:', 'woocommerce') . ' ' . $element . '</p>';
?>
