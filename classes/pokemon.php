<?php 

declare(strict_types=1);

// Creamos la clase
class Pokemon {
    // Usamos constructor para crear los objetos con los atributos directamente
    public function __construct(
        private int $id, //Id del Pokémon
        private string $name, // El nombre del pokémon
        private string $sprite, // El sprite del pokémon
        private string $type, // El tipo del pokémon
        private string $hability, // La habilidad del pokémon
        private string $weight, // El peso del pokémon
        private string $height, // La altura del Pokémon
        private string $base_exp // La experiencia base del Pokémon
    ) {}

    // Método para llamar a la API
    public static function fetch_and_create_pokemon(string $API_URL, int $id): Pokemon
    {   
        // Concatenamos la url de la API con el ID del pokémon
        $api = $API_URL . $id;
        // Hacemos la petición HTTP a la API
        $result = file_get_contents($api);
        // Decodificamos el json recibido
        $data = json_decode($result, true);
  
        // Obtenemos el primer tipo del Pokémon
        $type = $data['types'][0]['type']['name'];
        
        // Obtenemos la primera habilidad del Pokémon
        $hability = $data['abilities'][0]['ability']['name'];
        
        return new self(
            $data['id'],
            $data['name'],
            $data['sprites']['front_default'],
            $type,
            $hability,
            (string) $data['weight'],
            (string) $data['height'],
            (string) $data['base_experience']
        );
    }
  
    
    //Obtenemos los datos del objeto en forma de array.
    public function get_data(): array
    {
        return get_object_vars($this);
    }
}