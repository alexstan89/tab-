<?php

namespace AudienceBundle\Library\UserProfile\DataProvider;

/**
 * Class Product
 * @package AudienceBundle\Library\UserProfile\DataProvider
 */
class Product extends Provider
{
    const MAX_REACH = 5000000;
    const MIN_REACH = 400000;

    /**
     * @var array
     */
    public static $products = [
        'Telefon mobil Google Pixel XL, 32GB, 4G, Black',
        'Telefon mobil Apple iPhone 7 Plus, 256GB, 4G, Argintiu',
        'Telefon mobil Apple iPhone 7 Plus, 256GB, 4G, Negru Lucios',
        'Telefon mobil Apple iPhone 7 Plus, 256GB, Silver',
        'Telefon mobil Apple iPhone 6 Plus, 128GB, Gold',
        'Telefon mobil Apple iPhone 6S Plus, 128GB, Silver',
        'Telefon mobil Apple iPhone 6S Plus, 128GB, Space Gray',
        'Telefon mobil Google Pixel, 32GB, 4G, Silver',
        'Telefon mobil Samsung Galaxy S8 Plus G9550 Dual Sim 128GB LTE 4G 6GB RAM',
        'HUAWEI Mate 9 Dual Sim 128GB LTE 4G Auriu 6GB RAM',
        'Telefon mobil Samsung Galaxy S8 Plus G9550 Dual Sim 64GB LTE 4G 4GB RAM Albastru',
        'Telefon mobil Samsung N9200 Galaxy Note 5, Dual Sim, 64GB, 4G, Gold',
        'Telefon mobil Apple iPhone 7, 256GB, 4G, Roz Auriu',
        'Telefon mobil Apple iPhone 7 Plus, 128GB, Jet Black',
        'Telefon mobil Apple iPhone 6, 16GB, Space Grey',
        'Telefon mobil Apple iPhone 7, 256GB, Silver',
        'Telefon mobil Samsung Galaxy Note 7, 64GB, 4G, Black',
        'Telefon mobil Apple iPhone 6 Plus, 64GB, Gold',
        'Telefon mobil Apple iPhone 6 Plus, 128GB, Silver',
        'Telefon mobil Samsung Galaxy S8 Plus G955FD Dual Sim 64GB, LTE 4G, 4GB RAM, Roz',
        'Telefon mobil Apple iPhone 7, 256GB, Jet Black',
        'Telefon mobil Google Pixel XL, 32GB, 4G, Grey',
        'Telefon mobil Google Pixel, 128GB, 4G, Grey',
        'Telefon mobil Apple iPhone 7 Plus, 32GB, 4G, Negru',
        'Telefon mobil Samsung Galaxy S8, G9500, Dual Sim 64GB LTE 4G, 4GB RAM, Auriu',
        'Telefon mobil Htc U11 Dual Sim 128GB LTE 4G, 6GB RAM, Albastru',
        'Telefon mobil Samsung Galaxy S8, 64GB, 4G, Argintiu',
        'Telefon mobil LG V10, 64GB, 4G, Space Black',
        'Telefon mobil Samsung Galaxy S8 Plus, 64GB, 4G, Midnight Black',
        'Telefon mobil Samsung Galaxy S8 Plus, 64GB, 4G, Orchid Grey',
        'Telefon mobil LG G6 Plus Dual Sim 128GB LTE 4G Negru 4GB RAM',
        'HTC U11 Dual Sim 128GB LTE 4G Argintiu 6GB RAM',
        'Telefon mobil Google Pixel, 32GB, 4G, Black',
        'HUAWEI Honor V9 Dual Sim 128GB LTE 4G Auriu 6GB RAM',
        'Telefon mobil Asus Zenfone AR, ZS571KL, Dual Sim, 256GB, LTE 4G, 8GB RAM, Negru',
        'Telefon mobil Apple iPhone 6 Plus, 128GB, Space Gray',
        'Telefon mobil ASUS ZenFone 3 Deluxe ZS570KL, Dual Sim, 256GB, 4G, Rose Gold',
        'Telefon mobil Apple iPhone 5, 32GB, Black',
        'Telefon mobil Apple iPhone 6S, 128GB, Gold',
        'Telefon mobil Sony Xperia XZ Premium G8142 Dual Sim 64GB LTE 4G 4GB RAM Argintiu',
        'Telefon mobil Apple iPhone 6s Plus, 32GB, Gold',
        'Telefon mobil Samsung Galaxy Note 5, N9208, Dual Sim, 64GB, 4G, Argintiu',
        'Telefon mobil Huawei P10 Plus, Dual Sim, 128GB, 4G, Prestige Gold',
        'Telefon mobil Apple iPhone 6S Plus, 16GB, Gold',
        'Telefon mobil Huawei P10 Plus, Dual Sim, 128GB, 4G, Mystic Silver',
        'Telefon mobil Apple iPhone 5, 64GB, Black',
        'Telefon mobil Samsung GALAXY S7 Edge, 32GB, Gold',
        'Telefon mobil Samsung Galaxy S8, 64GB, 4G, Orchid Grey',
        'Telefon mobil Apple iPhone 6S, 64GB, Gold',
        'Telefon mobil Huawei P10 Plus, Dual Sim, 128GB, 4G, Dazzling Blue',
        'LG G6 Dual Sim 64GB LTE 4G Negru 4GB RAM H870DS',
        'Telefon mobil Apple iPhone 6S, 64GB, Space Gray',
        'Telefon mobil Apple iPhone 5, 32GB, White',
        'Telefon mobil Sony Xperia XZ Premium G8142 Dual Sim 64GB LTE 4G Roz 4GB RAM',
        'Telefon mobil Xiaomi Mi Mix Dual Sim 256GB LTE 4G Negru',
        'Telefon mobil Apple iPhone 6, 128GB, Silver',
        'Telefon mobil Samsung Galaxy Note 5, N920I, 32GB, LTE 4G, Auriu',
        'Telefon mobil Apple iPhone 6S, 64GB, Silver',
        'Telefon mobil Samsung Galaxy Note Edge, 32GB, 4G, Black',
        'Telefon mobil Apple iPhone 7, 32GB, Rose Gold',
        'Telefon mobil Apple iPhone 6 Plus, 16GB, Space Gray',
        'Telefon mobil OnePlus A5000 5 Dual Sim 128GB LTE 4G Negru 8GB RAM',
        'Telefon mobil Apple iPhone 6 Plus, 16GB, Silver',
        'Telefon mobil Lg G6 Plus H870DSU Dual Sim 128GB LTE 4G, 4GB RAM, Albastru',
        'Telefon mobil Samsung GALAXY S6 Edge, 64GB, Black',
        'Telefon mobil LG G3 4G, 32 GB, Black Titan',
        'Telefon mobil Apple iPhone 6s Plus, 32GB, Rose Gold',
        'Telefon mobil Samsung G928 GALAXY S6 Edge Plus, 32GB, Black',
        'Telefon mobil Apple iPhone 5, 16GB, Black',
        'SONY Xperia XZs Dual Sim 64GB LTE 4G Negru 4GB RAM G8232',
        'Telefon mobil HTC One E9 Plus, Dual Sim, 32GB, 4G, Gold',
        'Telefon mobil Samsung Galaxy S7 Edge, 32GB, 4G, White',
        'Telefon mobil Oppo R9s Plus Dual Sim 64GB, 6GB RAM, LTE 4G, Negru',
        'Telefon mobil Xiaomi Mi 6, Dual Sim, 128GB, LTE 4G, 6GB RAM, Negru',
        'SONY Xperia XZs Dual Sim 64GB LTE 4G Argintiu 4GB RAM G8232',
        'Telefon mobil Apple iPhone 5, 16GB, White',
        'Telefon mobil LG G4 Dual Sim, 32GB, 4G, White',
        'Telefon mobil Sony Xperia Z3, 16GB, 4G, Silver Green',
        'Telefon mobil Apple iPhone 5S, 64GB, Gold',
        'Telefon mobil Apple iPhone 5S, 64GB, Space Gray',
        'Telefon mobil Samsung Galaxy S7 Edge G9350 Dual Sim, 32GB, LTE 4G, Argintiu',
        'Telefon Mobil, Lg V10 Dual Sim 64Gb Lte 4G Auriu 4Gb Ram H691N',
        'LG G6 Dual Sim 64GB LTE 4G Argintiu 4GB RAM H870DS',
        'SONY Xperia XZs Dual Sim 64GB LTE 4G Albastru 4GB RAM G8232',
        'Telefon mobil Xiaomi Mi Mix Dual Sim 128GB LTE 4G, 4GB RAM, Negru',
        'Telefon mobil Samsung Galaxy Note 5, N9208, Dual Sim, 64GB, 4G, Roz',
        'Telefon mobil Samsung G928 GALAXY S6 Edge Plus, 64GB, 4G, Gold',
        'Telefon mobil Samsung G928 GALAXY S6 Edge Plus, 32GB, Gold',
        'Telefon mobil HTC One 4G, White',
        'Telefon mobil Apple iPhone 6, 64GB, Gold',
        'Telefon mobil Samsung N910 Galaxy Note 4 32GB, 4G, Bronze Gold',
        'XIAOMI Mi Note 2 Dual Sim 128GB LTE 4G Negru 6GB RAM',
        'Telefon mobil BlackBerry KEYone, Qwerty, 32GB, 4G, Silver',
        'Telefon mobil Samsung Galaxy S7, G930F, 32GB, LTE 4G, 4GB RAM, Alb',
        'ONEPLUS 3T Dual Sim 128GB LTE 4G Gri 6GB RAM A3010',
        'Telefon mobil Blackberry Keyone, 32GB, LTE 4G, 3GB RAM, Negru',
        'Telefon mobil Samsung Galaxy Note 5 N920CD, Dual Sim, 32GB, 4G, Alb',
        'Telefon mobil Samsung GALAXY S6, 64GB, Gold',
        'Telefon mobil Apple iPhone 5C, 32GB, Green',
        'Telefon mobil YotaPhone 2, 32GB, 4G, Black',
        'Telefon mobil Samsung Galaxy Note 5, N920, 64GB, LTE 4G, 4GB RAM, Auriu',
        'Telefon mobil OnePlus 3T A3010 Dual Sim 128GB, 6GB RAM, Negru',
        'Telefon mobil Samsung Galaxy S7 Edge, G935FD, Dual Sim, 64GB, LTE 4G, 4GB RAM, Roz',
        'Telefon mobil Samsung Galaxy S7 Edge G935FD Dual Sim 64GB LTE 4G 4GB RAM Auriu',
        'Telefon mobil Sony X Performance, Dual SIM, 64GB, 4G, White',
        'Telefon mobil HTC Butterfly S, Grey',
        'Telefon mobil HTC Butterfly S, White',
        'HUAWEI P10 Dual Sim 32GB LTE 4G Auriu 4GB RAM L09',
        'Telefon mobil Huawei Mate 9, Dual Sim, 64GB, 4G, Space Gray',
        'Telefon mobil Sony Z5 Premium, Dual SIM, 32GB, 4G, Black',
        'Telefon mobil Apple iPhone 6, 64GB, Silver',
        'Telefon mobil Samsung GALAXY S6, 64GB, Black',
        'Apple iPhone 6s 16GB Rose Gold',
        'Apple iPhone 6s 16GB Space Gray',
        'Telefon mobil Apple iPhone 5C, 32GB, Blue',
        'Telefon mobil ASUS ZenFone 3 Deluxe ZS570KL, Dual Sim, 64GB, 4G, Glacier Silver',
        'Telefon mobil Apple iPhone 6s, 32GB, Rose Gold',
        'Telefon mobil Apple iPhone 6s, 32GB, Space Grey',
        'Pachet Telefon mobil Sony Xperia Z2, 4G, White cu bratara Sony Smartband',
        'Telefon mobil Apple iPhone 6s, 32GB, Silver',
        'Telefon mobil Huawei Mate 9, Dual Sim, 64GB, 4G, Champagne Gold',
        'Telefon mobil Apple iPhone 5S, 64GB, Silver',
        'Telefon mobil OnePlus 3T, A3003, Dual Sim, 64GB, LTE 4G, 6GB RAM, Auriu',
        'Telefon mobil Samsung Galaxy S7 Edge, Dual Sim, 32GB, 4G, Gold',
        'Telefon mobil Samsung GALAXY S7 Edge, Dual Sim, 32GB, 4G, Black',
        'Telefon mobil Motorola Moto Z2 Play Dual Sim 64GB LTE 4G Gri 4GB RAM',
        'HTC U Ultra Dual Sim 64GB LTE 4G Albastru 4GB RAM',
        'Telefon mobil Sony X Performance, Dual SIM, 64GB, 4G, Rose Gold',
        'Telefon mobil Oppo R9s Plus Dual Sim 64GB, 6GB RAM, LTE 4G, Roz',
        'Telefon mobil Oppo R9s Plus Dual Sim 64GB, 6GB RAM, LTE 4G, Auriu',
        'Telefon mobil Apple iPhone 6, 64GB, Space Gray',
        'Telefon mobil Sony X Performance, Dual SIM, 64GB, 4G, Graphite Black',
        'Telefon mobil Apple iPhone 6S, 16GB, Space Gray',
        'Telefon mobil Oppo Find 7A, 16GB, 4G, White',
        'Telefon mobil Apple iPhone 4S, 16GB, Alb',
        'Telefon mobil OnePlus A5000 5 Dual Sim 64GB LTE 4G Negru 6GB RAM',
        'Telefon mobil Samsung Galaxy Note 5, Dual Sim, 32GB, 4G, Black',
        'Telefon mobil Samsung Galaxy S5 Octa Core, 16GB, White',
        'Telefon mobil Samsung Galaxy Note 5, 32GB, 4G, White',
        'Telefon mobil Sony Z5 Premium, Dual SIM, 32GB, 4G, Chrome',
        'Telefon mobil VIVO X9 Plus, Dual Sim, 64GB, LTE 4G, 4GB RAM, Negru',
        'Telefon mobil Xiaomi Mi 6 Dual Sim 64GB LTE 4G 6GB RAM Negru'
    ];

    /**
     * @param array $filters
     * @return array
     */
    public function getProducts(array $filters = [])
    {
        $data = [];

        $idGenerator = 1;
        foreach (static::$products as $value) {
            $data[] = [
                'id' => $idGenerator,
                'name' => $value,
                'maxReach' => $this->getMaxReach()
            ];
        }

        return $data;
    }

    /**
     * @return int
     */
    protected function getMaxReach()
    {
        return rand(static::MIN_REACH, static::MAX_REACH);
    }
}