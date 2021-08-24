<?php

namespace App\Util;

class Stringfake
{

    public static function  generateRandomString($length = 200)
    {
        $characters = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function randomName()
    {
        $names = array(
            'Christopher',
            'Ryan',
            'Ethan',
            'John',
            'Zoey',
            'Sarah',
            'Michelle',
            'Samantha',
            'Walker',
            'Thompson',
            'Anderson',
            'Johnson',
            'Tremblay',
            'Peltier',
            'Cunningham',
            'Simpson',
            'Mercado',
            'Sellers'

        );
        foreach ($names as $item) {
            $name = $names[mt_rand(0, sizeof($names) - 1)];
        }
        return $name;
    }

    public static function randomLastName()
    {
        $last_name = array(
            'Aaron',
            'Abbott',
            'Alfaro',
            'Archie',
            'Zoey',
            'Alicea',
            'Archer',
            'Ayala',
            'Walker',
            'Aquino',
            'Anderson',
            'Atwell',
            'Armijo',
            'Andres',
            'Cunningham',
            'Armstrong',
            'Ashton',
            'Arnett'

        );
        foreach ($last_name as $item) {

            $lastname = $last_name[mt_rand(0, sizeof($last_name) - 1)];
        }
        return $lastname;
    }

    public static function randomFirstName()
    {
        $first_name = array(
            'Yusuf',
            'Addison',
            'Irvin',
            'Rogelio',
            'Abram',
            'Liberty',
            'Peyton',
            'Kaiden',
            'Ashleigh',
            'Willie',
            'Callie',
            'Gavyn',
            'Armijo',
            'Andres',


        );
        foreach ($first_name as $item) {
            $firstname = $first_name[mt_rand(0, sizeof($first_name) - 1)];
        }
        return $firstname;
    }

    public static function randomAddress()
    {
        $Address = array(
            'Beck Mill, Reva Syke Road, Clayton,BD14 6QY,(01274) 264645',
            '182 Idle Road, Bradford,BD2 4JR,(01274) 752526',
            '26 Griffe Road, Wyke,BD12 9JU,(01422) 506316',
            '105 Salt Street, Bradford,BD8 8BH,(01274) 663318',
            '342 Oxford Road, Gomersal,BD19 4JR,(01274) 426118',
            '26 Ennerdale Road, Bradford,BD2 4JQ,(01274) 260800',
            '19 Heaton Grove, Bradford,BD9 4DY,(01274) 385020',
            'The Barn, Stump Cross, Keighley,BD21 5PZ,(01535) 405070',
            'Tall Trees, 1 Bank Lane, Grassington,BD23 5BN,(01756) 258660',
            '1 South Street, Oakenshaw,BD12 7DJ,(01274) 363880',
            '69 Nelson Street, Cross Roads,BD22 9EA,(01535) 028803',
            '63 Birkenshaw Lane, Birkenshaw,BD11 2HB,(01274) 185805',
            '13 Padgum, Baildon,BD17 6BT,(01943) 104424',
            '90 Howden Road, Silsden,BD20 0JB,(01535) 114364',
            '5 Crack Lane, Wilsden,BD15 0AY,(01535) 585645',
            '45 Hastings Avenue, Bradford,BD5 9PR,(01274) 340445',
            '194 Priestley Terrace, Bradford,BD6 1QU,(01274) 876534',
            '45 Skipton Road, Steeton,BD20 6TE,(01535) 367815',
            'Felside Grange, Barden Road, Eastby,BD23 6SW,(01756) 706336',
            '4 Pastureside Terrace West, Clayton,BD14 6LW,(01274) 304013',
            '26 Manor Park, Cowling,BD22 0DW,(01535) 510233',
            '12A Otley Street, Skipton,BD23 1DZ,(01756) 801503',
            '29 Yewdall Way, Bradford,BD10 8EE,(01274) 437602',
            '2 Beldon Park Close, Bradford,BD7 4LD,(01274) 811305',
            '3 Bookers Field, Gomersal,BD19 4UE,(01274) 036415',
            '726 Manchester Road, Bradford,BD5 7QS,(01274) 475837',
            '371 Harewood Street, Bradford,BD3 9ED,(01274) 582370',
            '1 Cawood, Woodlands Drive, Apperley Bridge,BD10 0PN,(01943) 866863',
            'Alpha Cabs, Lower Copy, Allerton,BD15 7QQ,(01274) 836264',
            '14 Highgate Grove, Queensbury,BD13 2RU,(01274) 670054',
            '6 Moorside Drive, Drighlington,BD11 1HD,(01274) 705274',
            'Long Meadow, Fyfe Lane, Baildon,BD17 6DP,(01943) 383155',

        );
        foreach ($Address as $item) {
            $address = $Address[mt_rand(0, sizeof($Address) - 1)];
        }
        return $address;
    }

    public static function randomCity()
    {
        $City = array(
            'Brazoria',
            'Penngrove',
            'Ponca',
            'Indian Trail',
            'Kaaawa',
            'Lemay',
            'Sabana',
            'Pemberwick',
            'Gloster',
            'Keytesville',
            'Cathlamet',
            'Gervais',
            'Gibsonville',
            'Acme',
            'Rouses Point',
            'Shell Valley',
            'Waitsburg',
            'Malad City',
            'St. Elizabeth',
            'Pine Lawn',


        );
        foreach ($City as $item) {
            $city = $City[mt_rand(0, sizeof($City) - 1)];
        }
        return $city;
    }


    public static function randomCountry()
    {
        $countries = array(
            "Afghanistan",
            "Albania",
            "Algeria",
            "American Samoa",
            "Andorra",
            "Angola",
            "Anguilla",
            "Antarctica",
            "Antigua and Barbuda",
            "Argentina",
            "Armenia",
            "Aruba",
            "Australia",
            "Austria",
            "Azerbaijan",
            "Bahamas",
            "Bahrain",
            "Bangladesh",
            "Barbados",
        );
        foreach ($countries as $item) {
            $country = $countries[mt_rand(0, sizeof($countries) - 1)];
        }
        return $country;
    }

    public static function randomProductline()
    {
        $product_line = array(
            'Smartphone',
            'Laptop',
            'Tablet',
            'Smart watch',
            'Computer',
        );
        foreach ($product_line as $item) {
            $productLine = $product_line[mt_rand(0, sizeof($product_line) - 1)];
        }
        return $productLine;
    }


    public static function randomEmail()
    {
        $Email = array(
            'maxine.matthews@gmail.com',
            'grant.spence@gmail.com',
            'alta.herrera@gmail.com',
            'israel.newman@gmail.com',
            'rosemary.hobbs@gmail.com',
            'francesco.moss@gmail.com',
            'ariel.sanders@gmail.com',
            'traci.elliott@gmail.com',
            'mavis.bailey@gmail.com',
            'bennie.mckee@gmail.com',
            'carly.buckley@gmail.com',
            'brock.christensen@gmail.com',
            'bobbie.kane@gmail.com',
            'jeannie.kinney@gmail.com',
            'genevieve.pratt@gmail.com',
            'freddy.todd@gmail.com',
            'enoch.white@gmail.com',
            'laura.howell@gmail.com',
            'hilario.lynch@gmail.com',
            'peggy.haney@gmail.com'
        );
        foreach ($Email as $item) {
            $email = $Email[mt_rand(0, sizeof($Email) - 1)];
        }
        return $email;
    }


    public static function randomPhone()
    {
        $Phone = array(
            '(574)220-1251',
            '(343)700-4308',
            '(212)200-6648',
            '(475)227-2447',
            '(810)595-7941',
            '(430)987-8271',
            '(240)424-4488',
            '(539)832-5619',
            '(856)674-4583',
            '(573)372-1373',
            '(218)262-6935',
            '(306)469-4844',
        );
        foreach ($Phone as $item) {
            $phone = $Phone[mt_rand(0, sizeof($Phone) - 1)];
        }
        return $phone;
    }
}
