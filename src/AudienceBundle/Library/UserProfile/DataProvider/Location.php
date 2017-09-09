<?php

namespace AudienceBundle\Library\UserProfile\DataProvider;

/**
 * Class Location
 * @package AudienceBundle\Library\UserProfile\DataProvider
 */
class Location extends Provider
{
    public static $cities = [
        'Bucuresti',
        'Constanta',
        'Iasi',
        'Timisoara',
        'Cluj-Napoca',
        'Galati',
        'Brasov',
        'Craiova',
        'Ploiesti',
        'Braila',
        'Oradea',
        'Bacau',
        'Arad',
        'Pitesti',
        'Sibiu',
        'Targu Mures',
        'Baia Mare',
        'Buzau',
        'Satu Mare',
        'Botosani',
        'Piatra-Neamt',
        'Suceava',
        'Drobeta-Turnu Severin',
        'Ramnicu Valcea',
        'Focsani',
        'Tulcea',
        'Targoviste',
        'Targu Jiu',
        'Resita',
        'Slatina',
        'Bistrita',
        'Roman',
        'Hunedoara',
        'Barlad',
        'Calarasi',
        'Deva',
        'Vaslui',
        'Giurgiu',
        'Zalau',
        'Sfantu  Gheorghe',
        'Alba Iulia',
        'Medias',
        'Turda',
        'Alexandria',
        'Onesti',
        'Slobozia',
        'Petrosani',
        'Lugoj',
        'Tecuci',
        'Miercurea Ciuc',
        'Medgidia',
        'Fagaras',
        'Mangalia',
        'Campulung',
        'Campina',
        'Ramnicu Sarat',
        'Odorheiu Secuiesc',
        'Caracal',
        'Sighetu Marmatiei',
        'Dej',
        'Rosiori de Vede',
        'Turnu Magurele',
        'Pascani',
        'Curtea de Arges',
        'Reghin',
        'Sighisoara',
        'Lupeni',
        'Dorohoi',
        'Husi',
        'Vulcan',
        'Oltenita',
        'Navodari',
        'Falticeni',
        'Caransebes',
        'Radauti',
        'Sacele',
        'Campia Turzii',
        'Mioveni',
        'Cugir',
        'Tarnaveni',
    ];

    /**
     * @param array $filters
     * @return array
     */
    public function getCities(array $filters = [])
    {
        return $this->withIdTransform(static::$cities, 'name');
    }
}