<?php

namespace App\Http\Controllers;

use App\Models\block_model;
use App\Models\city_model;
use App\Models\country_model;
use App\Models\info_model;
use App\Models\phase_model;
use App\Models\socity_model;
use App\Models\state_model;
use App\Models\sub_block_model;
use App\Models\sub_phase_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class data_controller extends Controller
{
    function welcome_fun()
    {
        function lahore_data()
        {
            $data = "Aabpara Coop Housing Society
            Aaqa Society
            Aashiana Road
            Abbot Road
            Abdali Road
            Abdalians Cooperative Housing Society
            Abdul Sattar Edhi Road
            Abid Market
            Abid Road
            Adams Housing Scheme
            Adan Villas
            Aftab Garden
            Afzal Park
            Agrics Town
            Ahbab Colony
            Ahlu Road
            Ahmad Avenue
            Ahmad Housing Society
            Ahmed Colony
            Airline Housing Society
            Airport Road
            Aitchison Society
            Al Faisal Town
            Al Hamad Colony
            Al Hamra Town
            Al Haram Garden
            Al Jalil Garden
            Al Jannat Housing Scheme
            Al Madina Avenue
            Al Noor Park Housing Society
            Al Noor Town
            Al Raheem Town
            Al Rahim Homes
            Al Rehman Garden
            Al-Amin Housing Society
            Al-Hadi Garden
            Al-Hafeez Garden Road
            Al-Hafiz Town
            Al-Hamad Colony (AIT)
            Al-Hamd Garden
            Al-Hamd Park
            Al-Jannat Housing Society - Kahna
            Al-Qayyum Garden
            Al-Raheem Garden
            Al-Raziq Garden
            Al-Wahab Garden - Phase 1
            Alfalah Town
            Ali Alam Garden
            Ali Town
            Ali View Garden
            Ali View Park
            Allama Iqbal Intl Airport
            Allama Iqbal Road
            Allama Iqbal Town
            Altaf Colony
            Aman Town
            Ameen Park
            Amina Park
            Anarkali
            Angoori Bagh Scheme 1
            Architects Engineers Housing Society
            Arya Nagar
            Ashiana-e-Quaid Housing Scheme
            Ashraf Garden
            Ashrafi Town
            Asif Colony
            Asif Town
            Asim Town
            Askari
            Atari Saroba
            Audit & Accounts Housing Society
            Awan Town
            Awasia Housing Society
            Azadi Chowk
            Azam Cloth Market
            Azam Gardens
            BOR - Board of Revenue Housing Society
            BRB Canal Road
            Babu Sabu
            Badami Bagh
            Bagarian
            Bagh Gul Begum
            Baghban Pura Housing Scheme
            Baghbanpura
            Bahadurabad
            Bahar Colony
            Bahar Shah Road
            Bahria Education & Medical City
            Bahria Nasheman
            Bahria Orchard
            Bahria Town
            Band Road
            Bandian Wala
            Bankers Avenue Cooperative Housing Society
            Bankers Co-operative Housing Society
            Bankers Town
            Batapur
            Beacon House Society
            Beadon Road
            Bedian Road
            Begampura
            Begum Kot
            Bhagatpura
            Bhaini Road
            Bhasin
            Bhatta Chowk
            Bhatti Colony
            Bhogiwal
            Bhogiwal Road
            Bilal Gunj
            Brandreth Road
            Canal Bank Housing Scheme
            Canal Burg
            Canal Fort II
            Canal Garden
            Canal View
            Canalberg Housing Society
            Cantt
            Cantt View Society
            Captain Jamal Road
            Cavalry Extension
            Cavalry Ground
            Central Park Housing Scheme
            Chah Miran
            Chaman Park
            Chauburji
            Chauburji Chowk
            Chauburji Park Road
            Chaudhary Colony
            Chaudhary Park
            Chhapa
            China Scheme
            Chinar Bagh
            Chinar Court
            Chohan Road
            Chungi Amar Sadhu
            Circular Road
            Civil Defence
            Clifton Colony
            College Road
            Cooper Road
            Cricketer Villas
            DHA 11 Rahbar
            DHA City
            DHA Defence
            Daroghewala
            Dars Baray Mian
            Data Ganj Bakhsh Town
            Davis Road
            Defence Fort
            Defence Garden
            Defence Road
            Dharampura
            Dholanwal
            Divine Gardens
            Divine Homes
            Doctors Housing Society
            Dogech
            Dream Avenue Lahore
            Dream Villas
            Dubai Town
            Dubban Pura
            EME Society
            Eden
            Eden Avenue Extension
            Eden Park
            Eden Villas
            Education Town
            Elite Town
            Empress Road
            Excise & Taxation Housing Scheme
            Expo Avenue Society
            Faisal Town
            Faiz Bagh
            Farid Court Road
            Farooq Avenue
            Farooq Colony
            Fateh Garh
            Fateh Villas
            Fazaia Housing Scheme
            Ferozepur Road
            Ferozewala
            Formanites Housing Scheme
            GCP Housing Scheme
            GOR
            GT Road
            Gaddafi Stadium
            Gajju Matah
            Garden Town
            Garhi Shahu
            Garrison Homes
            Gawalmandi
            Ghaziabad
            Ghous Garden
            Gohawa
            Gold Land Garden
            Gosha-e-Ahbab
            Government Employees Cooperative Housing Society (GECHS)
            Government Transport Headquarters Cooperative Housing Society
            Grand Avenues Housing Scheme
            Green Acres Housing Society
            Green Cap Housing Society
            Green City
            Green Fort
            Green Park
            Green Park Society
            Green Town Sector D2
            Green Villas
            Gujjar Colony
            Gul Colony
            Gul Kali
            Gul-e-Damin
            Gulbahar Colony
            Gulbahar Park
            Gulberg(665)
            Guldasht Town
            Gulfishan Colony
            Gulfishan Town
            Gulistan Colony
            Gulshan Colony
            Gulshan Farooq Scheme
            Gulshan Park
            Gulshan-E-Anwar
            Gulshan-E-Mustafa Housing Society
            Gulshan-e-Ahbab
            Gulshan-e-Lahore
            Gulshan-e-Ravi
            Gulshan-e-Sardar Housing Scheme
            Gulshan-e-Shalimar Housing Scheme
            Gulshan-e-Yaseen Housing Society
            Gulzar E Ahbab Society
            HBFC Housing Society
            Habib Homes
            Habibullah Road
            Haji Park Housing Scheme
            Hajvery Housing Scheme
            Hakim Town
            Hall Road
            Hameedpura
            Hamza Town
            Hanif Park Harbanspura
            Hanjarwal
            Harbanspura
            Harbanspura Road
            Hassan Town
            Hayderabad
            Heir
            Highcourt Society
            IBL Housing Scheme
            IEP Engineers Town
            Ibrahim Colony
            Ichhra
            Icon Valley
            Ideal Homes
            Immad Garden Housing Scheme
            Infantry Road
            Inmol Society
            Iqbal Avenue
            Iqbal Park
            Irrigation Cooperative Housing Society
            Islam Nagar
            Islamabad Colony
            Islamia Park
            Islampura
            Ismail Town
            Ittehad Park
            Ittifaq Town
            Izmir Town
            Jaffar Town
            Jaffaria Colony
            Jail Road
            Jalal Colony
            Jallo
            Jallo Park Road
            Jamal Homes
            Jamil Town
            Jan Muhammad Road
            Jati Umra Road
            Javed Colony - Ghazi Road
            Jia Baga Road
            Jinnah Colony
            Johar Town
            Jora Pull
            Jubilee Town
            Judicial Colony
            Kacha Ferozepur Road
            Kacha Jail Road
            Kacha Lawrence Road
            Kacha Road
            Kachupura
            Kahna
            Kahna Kacha
            Kala Khatai Road
            Kalma Chowk
            Kamahan Road
            Karbath
            Karim Park
            Katar Bund Road
            Kausar Colony
            Keer Khurd
            Khaira
            Khana Kacha Road
            Kharak
            Khayaban-e-Amin
            Khayaban-e-Jinnah Road
            Khayaban-e-Quaid
            Khokhar Town
            Khursheed Alam Road
            Kot Araian
            Kot Khawaja Saeed
            Kot Lakhpat
            Kotli Abdur Rahman
            Krishan Nagar
            LDA Avenue
            LDA Road
            Labor Colony
            Lahore - Islamabad Motorway
            Lahore - Jaranwala Road
            Lahore - Kasur Road
            Lahore Canal Bank Cooperative Housing Society
            Lahore Medical Housing Society
            Lahore Motorway City
            Lahore Press Club Housing Scheme
            Lahore Railway Station Road
            Lahore Villas
            Lakhodher
            Lakshmi Chowk
            Lalazaar Garden
            Lalazar
            Land Breeze Housing Society
            Lawrence Road
            Liaquatabad
            Lytton Road
            MET 2
            Madar-e-Millat Road
            Madina Colony
            Madina Homes
            Madina Town
            Main Canal Bank Road
            Makkah Colony
            Makki Complex
            Malik Park
            Mall Road
            Manawan
            Manga - Raiwind Road
            Manga Mandi
            Manhala Road
            Mansoora Homes
            Mansoorah
            Manzoor Colony
            Marghzar Officers Colony
            Maryam Town
            Mason Road
            Mateen Avenue
            Mateen Garden
            Maulana Shaukat Ali Road
            McLeod Road
            Mehar Fayaz Colony
            Meharpura
            Mehmood Booti
            Mehrabad
            Meraj Park
            Mian Amiruddin Park
            Mian Aziz Garden
            Mian Mir Colony
            Military Accounts Housing Society
            Millat Road
            Misri Shah
            Model Colony
            Model Town
            Mohafiz Town
            Mohlanwal
            Mohlanwal Road
            Mohlanwal Scheme
            Mohni Road
            Mominpur
            Mominpura Road
            Montgomery Road
            Moon Colony
            Mozang
            Mubarak Town
            Mughalpura
            Multan Road
            Munir Garden
            Muslim Nagar Housing Scheme
            Muslim Town
            Mustafa Town
            Mustafabad Lalyani
            NFC 1
            Nabi Pura
            Nadeem Shaheed Road
            Nadeem Town
            Nadia Ghee Mill Chowk
            Nai Abadi Harbanspura
            Nain Sukh
            Nasheman-e-Iqbal
            Nasirabad
            National Town
            Nawab Town
            Nawaz Sharif Colony
            Naz Town
            Nazir Garden Society
            New Amir Town
            New Canal Park
            New Chauburji Park
            New Garden Town
            New Khan Colony
            New Lahore City
            New Muslim Town
            New Samanabad
            New Shah Kamal Colony
            New Super Town
            Nicholson Road
            Nisbat Road
            Nishat Colony
            Nishtar Colony
            Nizamabad
            Noor Jahan Road
            OPF Housing Scheme
            Officer Colony
            Outfall Road
            P & D Housing Society
            PASSCO Housing Society
            PCSIR Housing Scheme
            PCSIR Staff Colony
            PIA Housing Scheme
            PIA Main Boulevard
            Pak Arab Housing Society
            Pak Park
            Pakistan Medical Housing Society
            Pakki Thatti
            Paradise Homes Super Town
            Paragon City
            Park View City
            Peco Road
            Pir Naseer
            Poonch Road
            Prem Nagar
            Prime Homes 1
            Prime Homes 2
            Public Health Society
            Punjab Coop Housing Society
            Punjab Government Labor Colony
            Punjab Government Servant Housing Foundation
            Punjab Govt Employees Society
            Punjab Small Industries Colony
            Punjab University Employees Society
            Qadri Colony
            Qartaba Chowk
            Qasim Garden
            Qazi Town
            Qilla Gujjar Singh
            Quaid-e-Azam Industrial Estate
            Rail Town (Canal City)
            Railway Officers Colony
            Raiwind Road
            Raj Garh
            Rajgarh Road
            Rajpoot Town
            Rana Town
            Rang Mahal
            Rasool Park
            Ravi Road
            Ravi Siphon Road
            Real Cottages
            Rehan Garden
            Rehman City - Phase 4
            Rehman City Phase 6
            Rehman Gardens
            Rehman Park
            Rehman Villas
            Rehmanpura (Ferozpur Road)
            Rehmanpura (Harbanspura)
            Rehmat Colony
            Revenue Society
            Rewaz Garden
            Rifle Range Road
            Ring Road
            River View Coop Housing Society
            Riwaz Garden
            Rizwan Garden Scheme
            Rohi Nala Road
            Royal Garden
            Royal Residencia
            Rustam Park
            Saadi Park
            Sabzazar Scheme
            Sadaat Town
            Safari Garden Housing Scheme
            Saggian
            Saggian Wala Bypass Road
            Sahafi Colony
            Saiden Shah Colony
            Saidpur
            Sajid Garden
            Salamatpura
            Salli Town
            Samanabad
            Samanzar Colony
            Sami Town
            Sanda
            Sanda Road
            Sant Nagar
            Saqib Town
            Saroba Gardens Housing Society
            Sarwar Town
            Shabbir Town
            Shadab Garden
            Shadbagh
            Shadipura
            Shadman
            Shadman Enclave
            Shah Di Khoi
            Shah Faisal Road
            Shah Jamal
            Shah Kamal Road
            Shah Khawar Town
            Shahdara
            Shahkam Chowk
            Shahpur Kanjra
            Shahtaj Colony
            Shalimar Housing Scheme
            Shalimar Link Road
            Shalimar Town
            Sham Nagar
            Shama Road
            Shams Colony
            Shanghai Road
            Sharaqpur Road
            Sheikhupura Road
            Sher Ali Road
            Sher Shah Road
            Shera Kot
            Sheraz Town
            Sheraz Villas
            Shershah Colony - Ichra
            Shershah Colony - Raiwind Road
            Sherwani Town Housing Scheme
            Shoukat Town
            Shuja Road
            Siddiqia Colony
            Siddiqia Society (College Road)
            Singhpura
            Sitara Colony
            Sodiwal
            Sozo Town
            State Life Housing Society
            Sue-e-Asal
            Sue-e-Asal Road
            Sufiabad
            Sui Gas Employees Cooperative Housing Society
            Sui Gas Housing Society
            Sukh Chayn Gardens
            Sultan Ahmed Road
            Sultan Colony
            Sultan Pura
            Sultan Town
            Sultanke
            Sundar Road
            Sunflower Housing Society
            Sunfort Gardens
            Sunny Park
            Super Town
            Supreme Villas
            Swami Nagar
            T & T Aabpara Housing Society
            TECH Society
            TIP Housing Society
            Taj Bagh Scheme
            Tajpura
            Tariq Colony
            Tariq Gardens
            Tariq Ismail Road
            Temple Road
            Thethar
            Thokar Niaz Baig
            Toheed Park
            Township
            Tricon Village
            UBL Housing Society
            UET Housing Society
            Upper Mall
            Usman Park
            Usmania Colony
            Valencia Housing Society
            Venus Housing Scheme
            Vital Homes Housing Scheme
            Wafaqi Colony
            Wagha Town
            Wahdat Colony
            Wahdat Road
            Walled City
            Walton Railway Officers Colony
            Walton Road
            Wapda Town
            Waris Colony
            Waris Road
            Wassan Pura Scheme No. 2
            Wassanpura
            West Wood Housing Society
            Women Housing Society
            Yasrab Colony
            Yazdani Road
            Youhanabad
            Zafar Colony
            Zaheer Villas
            Zaitoon Colony
            Zaman Colony
            Zaman Park
            Zubaida Park";
        }
        function islamabad_data()
        {
            $data = "
            7th Avenue
            9th Avenue
            AGHOSH
            Abdullah Garden
            Airport Avenue Housing Society
            Airport Enclave
            Aiza Garden
            Al Huda Town
            Al Qaim Town
            Ali Pur
            Alipur Farash
            Angoori Road
            Arsalan Town
            Athal
            Atomic Energy Employee Society
            B-17
            Bahria Town
            Bani Gala
            Bhara kahu
            Blue Area
            Bokra Road
            Burma Town
            C-18
            C-19
            CBR Town
            Capital Enclave
            Chak Shahzad
            Chatha Bakhtawar
            Chattar
            Constitution Avenue
            D-12
            D-13
            D-14
            D-16
            D-17
            D-18
            DHA Defence
            Diplomatic Enclave
            E-11
            E-13
            E-14
            E-15
            E-16
            E-17
            E-18
            E-7
            Eden Life Islamabad
            Emaar Canyon Views
            F-10
            F-11
            F-15
            F-17
            F-6
            F-7
            F-8
            FECHS(205)
            Faisal Town - F-18
            Fateh Jang Road
            Federal Government Employees Housing Foundation
            Frash Town
            G-10
            G-11
            G-12
            G-13
            G-14
            G-15
            G-16
            G-17
            G-6
            G-7
            G-8
            G-9
            GT Road
            Gandhara City
            Garden Town
            Ghauri Town
            Golra Mor
            Golra Road
            Green Avenue
            Green Hills Housing Scheme
            Gulberg
            Gulf Residencia
            Gulshan-e-Khudadad
            H-11
            H-12
            H-13
            H-15
            H-9
            I-10
            I-11
            I-12
            I-13
            I-14
            I-16
            I-8
            I-9
            IJP Road
            Ibn-e-Sina Road
            Iqbal Town
            Islamabad - Murree Expressway
            Islamabad - Peshawar Motorway
            Islamabad Expressway
            Islamabad Garden
            Islamabad Golf City
            Islamabad Highway
            Ittefaq Town
            J and K Zone 5
            Jagiot Road
            Jandala Road
            Jeddah Town
            Jhang Syedan
            Jhangi Syedan
            Jinnah Avenue
            Judicial Town
            Kahuta Road
            Karakoram Diplomatic Enclave
            Kashmir Highway
            Kashmir Town
            Khanna Pul
            Khayaban-e-Iqbal
            Koral Chowk
            Koral Town
            Korang Road
            Korang Town
            Kuri Road
            Lawyers Society
            Lehtarar Road
            Madina Town
            Main Margalla Road
            Malot
            Margalla Town
            Margalla Valley - C-12
            Marwa Town
            Meherban Colony
            Model Town
            Mohra Nur Road
            Motorway Chowk
            Multi Residencia & Orchards
            Mumtaz City
            Murree Road
            National Police Foundation
            National Police Foundation O-9
            Naval Anchorage
            Naval Farms Housing Scheme
            Naval Housing Scheme
            New Airport Town
            New Blue Area
            New Icon City
            New Shakrial
            Nova City
            OPF Valley
            Orchard Scheme
            Others
            PAEC Employees Cooperative Housing Society
            PAF Tarnol
            PECHS
            PTV Colony
            PWD Housing Scheme
            PWD Road
            Pakistan Town
            Park Enclave
            Park Road
            Park View City
            Phulgran
            Pind Begwal
            Pindorian
            Pir Sohawa
            Police Foundation Housing Society
            Qutbal Town
            Rawal Enclave
            Rawat
            River Garden
            Royal Avenue
            Sanam Garden Housing Scheme
            Sangjani
            Sarai Kharbuza
            Sehala Farm House
            Shah Allah Ditta
            Shaheen Town
            Shahpur
            Shalimar Town
            Shehzad Town
            Sihala
            Sihala Valley
            Simly Dam Road
            Soan Garden
            Sohan Valley
            Spring Valley
            Swan Garden
            Taramrri
            Tarlai
            Tarnol
            Thanda Pani
            The Organic Farms Islamabad
            The Springs
            Top City 1
            Tumair
            University Town
            Victoria Heights
            Wapda Town
            Zaraj Housing Scheme
            Zone 5";
        }

        //         $show=explode("\n","$data");
        // dd($show);

        try {
            DB::connection()->getPdo();
            if (DB::connection()->getDatabaseName()) {
            }
        } catch (\Exception $e) {
            echo "Database is not connected. Error: " . $e->getMessage();
        }
        return view('welcome');
    }

    function country_data_fun()
    {
        $data = country_model::all();
        return response()->json($data);
    }
    function state_data_fun($id)
    {
        $data = state_model::where('country_id', "$id")->get();
        return response()->json($data);
    }
    function add_city_data_fun(Request $request)
    {
        $data = new city_model;
        $data->country_id = $request->country;
        $data->state_id = $request->state;
        $data->city_name = ucfirst($request->add_city);
        if ($data->save()) {
            return response()->json(["msg" => 'New City Added']);
        }
    }
    function city_data_fun($id)
    {
        $data = city_model::where('state_id', "$id")->get();
        return response()->json($data);
    }

    function socity_data_fun(Request $request)
    {
        $show = explode("\n", "$request->socity");
        $newshow = [];
        foreach ($show as $key => $value) {
            $newshow[] = str_replace("\r", '', $value);
        }
        foreach ($newshow as $key => $newvalue) {
            $data = new socity_model;
            $data->country_id = $request->country;
            $data->state_id = $request->state;
            $data->city_id = $request->city;
            $data->socity_name = ucfirst($newvalue);
            $data->save();
        }
        return response()->json(["msg" => 'New Socity Added']);
    }

    function socity_form_fun($id)
    {
        $data = socity_model::where('city_id', "$id")->get();
        return response()->json($data);
    }

    function form_data_fun(Request $request)
    {
        $data = new info_model;
        $data->fullname = $request->fullname;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->country = $request->form_country;
        $data->state = $request->form_state;
        $data->city = $request->form_city;
        $data->socity = $request->form_socity;
        $data->phase = $request->form_phase;
        $data->block = $request->form_block;
        $data->sub_block = $request->form_sub_block;
        $data->country_name = $request->country_name;
        $data->state_name = $request->state_name;
        $data->city_name = $request->city_name;
        $data->socity_name = $request->socity_name;
        $data->phase_name = $request->phase_name;
        $data->block_name = $request->block_name;
        $data->sub_block_name = $request->sub_block_name;
        if ($data->save()) {
            return response()->json(['msg' => "Data Added"]);
        }
    }

    function show_all_data_fun()
    {
        $data = info_model::orderBy('id', 'desc')->get();
        return response()->json($data);
    }

    function delete_fun($id)
    {
        $data = info_model::find($id);
        if ($data->delete()) {
            return response()->json(['msg' => 'Data Deleted']);
        }
    }

    function fetch_update_data_fun($id)
    {
        $data = info_model::find($id);
        return response()->json($data);
    }

    function update_data_fun(Request $request)
    {
        $data = info_model::find($request->id);
        $data->fullname = $request->fullname;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->country = $request->form_country;
        $data->state = $request->form_state;
        $data->city = $request->form_city;
        $data->socity = $request->form_socity;
        $data->phase = $request->form_phase;
        $data->block = $request->form_block;
        $data->sub_block = $request->form_sub_block;
        $data->country_name = $request->country_name;
        $data->state_name = $request->state_name;
        $data->city_name = $request->city_name;
        $data->socity_name = $request->socity_name;
        $data->phase_name = $request->phase_name;
        $data->block_name = $request->block_name;
        $data->sub_block_name = $request->sub_block_name;
        if ($data->update()) {
            return response()->json(['msg' => "Data Updated"]);
        }
    }

    function add_phase_fun(Request $request)
    {
        $data = new phase_model;
        $show = explode("\n", "$request->phase");
        $newshow = [];
        foreach ($show as $key => $value) {
            $newshow[] = str_replace("\r", '', $value);
        }
        foreach ($newshow as $key => $newvalue) {
            $data = new phase_model;
            $data->country_id = $request->country;
            $data->state_id = $request->state;
            $data->city_id = $request->city;
            $data->socity_id = $request->socity;
            $data->phase_name = ucfirst($newvalue);
            $data->save();
        }
        return response()->json(["msg" => 'New Phase Added']);;
    }

    function phase_data_fun($id)
    {
        $data = phase_model::where('socity_id', $id)->get();
        return response()->json($data);
    }

    function add_block_fun(Request $request)
    {
        $show = explode("\n", "$request->block");
        $newshow = [];
        foreach ($show as $key => $value) {
            $newshow[] = str_replace("\r", '', $value);
        }
        foreach ($newshow as $key => $newvalue) {
            $data = new block_model;
            $data->country_id = $request->country;
            $data->state_id = $request->state;
            $data->city_id = $request->city;
            $data->socity_id = $request->socity;
            $data->phase_id = $request->phase;
            $data->block_name = ucfirst($newvalue);
            $data->save();
        }
        return response()->json(["msg" => 'New Block Added']);
    }

    function block_data_fun ($id){
        $data = block_model::where('phase_id', $id)->get();
        return response()->json($data);
    }

    function add_sub_block_fun (Request $request){
        $show = explode("\n", "$request->sub_block");
        $newshow = [];
        foreach ($show as $key => $value) {
            $newshow[] = str_replace("\r", '', $value);
        }
        foreach ($newshow as $key => $newvalue) {
            $data = new sub_block_model;
            $data->country_id = $request->country;
            $data->state_id = $request->state;
            $data->city_id = $request->city;
            $data->socity_id = $request->socity;
            $data->phase_id = $request->phase;
            $data->block_id = $request->block;
            $data->sub_block_name = ucfirst($newvalue);
            $data->save();
        }
        return response()->json(["msg" => 'New Block Added']);

    }

    function sub_block_data_fun ($id){
        $data = sub_block_model::where('block_id',$id)->get();
        return response()->json($data);

    }

}
