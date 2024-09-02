<?php

namespace Database\Seeders;

use App\Models\Drug;
use Illuminate\Database\Seeder;

class DrugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Drug::create([
            'image' => 'images/drugs/obat1.png',
            'name' => 'Rhinos SR 10 Kapsul',
            'registration_number' => 'DKL9905028303A1',
            'dose' => 'PENGGUNAAN OBAT INI HARUS SESUAI DENGAN PETUNJUK DOKTER. Dewasa dan anak diatas 12 tahun: 1 kapsul, 2 kali perhari atau setiap 12 jam.',
            'composition' => 'Tiap kapsul mengandung: Loratadine 5 mg Pseudoephedrine HCI 120 mg',
            'indication' => 'INFORMASI OBAT INI HANYA UNTUK KALANGAN MEDIS. Meredakan gejala yang berhubungan dengan rinitis alergi misalnya bersin, hidung tersumbat, rinore, pruritus & lakrimasi.',
            'description' => 'RHINOS SR merupakan obat dengan kandungan Pseudoephedrine HCI dan Loratadine dalam bentuk kapsul lepas lambat. Obat ini dapat meredakan gejala yang berhubungan dengan rinitis alergi misalnya bersin, hidung tersumbat, rinore, pruritus & lakrimasi. Dalam penggunaan obat ini harus SESUAI DENGAN PETUNJUK DOKTER.',
            'adverse_drug_reaction' => 'Pemakaian obat umumnya memiliki efek samping tertentu dan sesuai dengan masing-masing individu. Jika terjadi efek samping yang berlebih dan berbahaya, harap konsultasikan kepada tenaga medis. Efek samping yang mungkin terjadi dalam penggunaan obat adalah: Gangguan GI, Palpitasi, Takikardia & Ekstrasistol.',
            'tags' => [1, 3],
            'drug_classification_id' => 3,
            'admin_id' => 1,
        ]);

        Drug::create([
            'image' => 'images/drugs/obat2.png',
            'name' => 'Rhinos Junior Sirup 60 ml ',
            'registration_number' => 'DTL0705042637A1',
            'dose' => 'Dewasa dan anak-anak lebih dari 12 tahun: 2 sendok takar (10 ml), 3 kali sehari. Anak-anak 6-12 tahun: 1 sendok takar (5 ml), 3 kali sehari. Anak-anak 2-5 tahun: 1/2 sendok takar (2.5 ml), 3 kali sehari. Anak-anak di bawah 2 tahun: atas petunjuk dokter.',
            'composition' => 'Tiap 5 ml mengandung :Pseudoephedrine HCl 15 mg, Chlorpheniramine maleate 1 mg.',
            'indication' => 'Obat ini digunakan untuk meringankan gejala bersin-bersin dan hidung tersumbat karena pilek.',
            'description' => 'RHINOS JUNIOR merupakan obat dengan kandungan Pseudoephedrine HCl dan Chlorpheniramine Maleate yang digunakan untuk meringankan gejala flu seperti bersin-bersin dan hidung tersumbat karena pilek.',
            'adverse_drug_reaction' => 'Insomnia, sakit kepala, eksitasi, tremor, takikardia, aritmia, palpitasi, kesulitan buang air kecil, gangguan GI, mengantuk, mulut kering.',
            'tags' => [2, 3],
            'drug_classification_id' => 2,
            'admin_id' => 1,
        ]);

        Drug::create([
            'image' => 'images/drugs/obat3.png',
            'name' => 'Actifed Plus Cough Sirup 60 ml (Merah)',
            'registration_number' => 'DTL1624504137A1',
            'dose' => 'Dewasa dan anak-anak di atas 12 tahun: 1 sendok takar (5 ml), 3 kali sehari. Anak-anak usia 6-12 tahun: 1/2 sendok takar (2,5 ml), 3 kali sehari. Tidak dianjurkan untuk anak di bawah 6 tahun',
            'composition' => 'Tiap 5 ml sirup mengandung: Dextromethorphan HBr 10 mg, Pseudoephedrine HCl 30 mg, Triprolidine HCl 1.25 mg.',
            'indication' => 'Obat ini digunakan untuk meredakan gejala flu pilek dan batuk kering, serta gatal tenggorokan.',
            'description' => 'ACTIFED PLUS COUGH SUPPRESANT merupakan obat batuk kering dan pilek dengan kandungan Dextromethorphan HBr, Pseudoephedrine HCl, dan Triprolidine HCl. Dextromethorphan HBr sebagai antitusif yang bisa menekan refleks batuk. Pseudoephedrine bekerja membantu meredakan pembengkakan pembuluh darah di dalam hidung, sehingga saluran napas lebih terbuka dan napas menjadi lega. Triprolidine HCl sebagai antihistamin/anti alergi untuk meredakan gejala alergi seperti bersin-bersin.',
            'adverse_drug_reaction' => 'Mengantuk, gangguan pencernaan, sakit kepala, gangguan psikomotorik, takikardi, aritmia, mulut kering, palpitasi, kesulitan berkemih',
            'tags' => [3],
            'drug_classification_id' => 2,
            'admin_id' => 1,
        ]);

        Drug::create([
            'image' => 'images/drugs/obat4.png',
            'name' => 'Sanadryl DMP Sirup 60 ml',
            'registration_number' => 'DTL7822231237A1',
            'dose' => 'Dewasa : 3 kali sehari, 2 sendok takar (@10 ml). Anak-anak (6-12 tahun) : 3 kali sehari, 1 sendok takar (@ 5 ml).',
            'composition' => 'Per 5 ml: Dextromethorphan HBr 10 mg, Diphenhydramine HCl 12.5 mg, Ammonium Cl 100 mg, Na citrate 50 mg, Menthol 1 mg.',
            'indication' => 'Meredakan mengobati batuk kering, gejala alergi dan flu.',
            'description' => 'SANADRYL DMP SIRUP 60 ML mengandung zat aktif Dextromethorphan HBr, Difenhidramin HCl, Ammonium Klorida, Natrium Sitrat dan menthol. Obat ini digunakan untuk mengatasi batuk tidak berdahak yang disebabkan karena alergi. Dalam penggunaan obat ini HARUS SESUAI DENGAN PETUNJUK DOKTER.',
            'adverse_drug_reaction' => 'Mengantuk, pusing, gangguan koordinasi, sekresi saluran pernapasan mengental, mulut kering; kejang epileptiform (dosis besar)',
            'tags' => [1, 3],
            'drug_classification_id' => 2,
            'admin_id' => 1,
        ]);

        Drug::create([
            'image' => 'images/drugs/obat5.png',
            'name' => 'Panadol Flu & Batuk 10 Kaplet',
            'registration_number' => 'DTL1124503604A1',
            'dose' => 'Dewasa: 1 kaplet 3 kali sehari Jangan melebihi 8 kaplet dalam tiap jangka waktu 24 jam. Jangan diberikan kepada anak-anak di bawah umur 12 tahun, kecuali atas petunjuk dokter.',
            'composition' => 'Setiap tablet mengandung:Paracetamol 500 mg, Phenylephrine HCL 5 mg, dan Dextromethorphan HBr 15 mg.',
            'indication' => 'Obat ini digunakan untuk meredakan gejala flu seperti demam, sakit kepala, hidung tersumbat dan batuk tidak berdahak.',
            'description' => 'PANADOL FLU & BATUK merupakan obat batuk dan pereda flu dengan kandungan Paracetamol, Phenylephrine HCI, dan Dextromethorphan HBr. Bekerja sebagai analgesik-antipiretik, masal dekongestan, dan antitusif. Obat ini dapat digunakan untuk meredakan gejala flu seperti: demam, sakit kepala, hidung tersumbat dan batuk tidak berdahak.',
            'adverse_drug_reaction' => 'Pemakaian obat umumnya memiliki efek samping tertentu dan sesuai dengan masing-masing individu. Jika terjadi efek samping yang berlebih dan berbahaya, harap konsultasikan kepada tenaga medis. Penggunaan jangka panjang dan dosis besar dapat menyebabkan kerusakan hati. Efek samping lain yaitu tachycardia (jantung berdebar), dyspepsia, nausea, kemerahan pada kulit, depresi pernafasan dan SSP, mengantuk, konstipasi, mual, pusing, gangguan saluran pencernaan, insomnia, gelisah, tremor. Penggunaan jangka panjang dan dosis besar menyebabkan kerusakan hati.',
            'tags' => [1, 3],
            'drug_classification_id' => 2,
            'admin_id' => 1,
        ]);

        Drug::create([
            'image' => 'images/drugs/obat6.png',
            'name' => 'Vicks Formula 44 Sirup 54 ml',
            'registration_number' => 'DTL0304518837A1',
            'dose' => 'Gunakan setiap 4 jam sesuai kebutuhan, sampai 6x sehari. Dewasa : 12 tahun ke atas : 2 sendok takar (10ml) Anak-anak : 6-12 tahun : 1 sendok takar (5ml) atau gunakan sesuai petunjuk dokter.',
            'composition' => 'setiap 5ml mengandung: Dextromethrophan Hydrobromide 5mg Doxylamine Succinate 2mg.',
            'indication' => 'Meringankan batuk yang tidak berdahak disertai bersin-bersin/ alergi.',
            'description' => 'VICKS FORMULA 44 SIRUP merupakan Sirup Obat Batuk dengan kombinasi formula Dextromethorphan HBr dan Doxylamine Succinate untuk meringankan batuk yang tidak berdahak disertai bersin-bersin/alergi.',
            'adverse_drug_reaction' => 'Pemakaian obat umumnya memiliki efek samping tertentu dan sesuai dengan masing-masing individu. Jika terjadi efek samping yang berlebih dan berbahaya, harap konsultasikan kepada tenaga medis. Efek samping yang mungkin terjadi dalam penggunaan obat adalah: Dapat menyebabkan mual, pusing, mengantuk, & konstipasi.',
            'tags' => [1, 3],
            'drug_classification_id' => 2,
            'admin_id' => 1,
        ]);

        Drug::create([
            'image' => 'images/drugs/obat7.png',
            'name' => 'Siladex Antitussive Sirup 60 ml',
            'registration_number' => 'DTL1613025737A1',
            'dose' => 'Dewasa dan anak-anak diatas 12 tahun: 3 kali sehari, 1 sendok takar (5 ml). Anak-anak 6 � 12 tahun: 3 kali sehari, 0.5 sendok takar (2.5 ml). Atau menurut petunjuk dokter.',
            'composition' => 'Chlopheniramine maleate 1 mg, Dextromethorphan Hydrobromide 15 mg.',
            'indication' => 'Meredakan batuk tidak berdahak atau batuk kering yang disertai alergi.',
            'description' => 'SILADEX ANTITUSSIVE SIRUP merupakan obat yang mengandung Dextromethorphan HBr dan Chlorphenamine Maleate. Obat ini digunakan untuk meredakan batuk tidak berdahak atau batuk kering yang disertai alergi. Obat ini bekerja dengan meningkatkan ambang rangsang refleks batuk dan sebagai antihistamin. Dextromethorphan bekerja sebagai antitussive (antibatuk) dengan meningkatkan ambang rangsang refleks batuk, sedangkan Chlorpheniramine bekerja sebagai antihistamine (antialergi).',
            'adverse_drug_reaction' => 'Pemakaian obat umumnya memiliki efek samping tertentu dan sesuai dengan masing-masing individu. Jika terjadi efek samping yang berlebih dan berbahaya, harap konsultasikan kepada tenaga medis. Efek samping yang mungkin terjadi dalam penggunaan obat adalah : Mengantuk, mual, pusing, konstipasi, mulut kering.',
            'tags' => [1, 3],
            'drug_classification_id' => 2,
            'admin_id' => 1,
        ]);

        Drug::create([
            'image' => 'images/drugs/obat8.png',
            'name' => 'Obat Batuk Cap Ibu & Anak Sirup 150 ml',
            'registration_number' => 'TI084627811',
            'dose' => 'Dewasa dan anak > 12 tahun : 3 kali per hari 1 sendok takar (15ml). Anak 7-12 tahun : 3 Kali sehari 2/3 sendok takar (10ml). Anak 3-6 tahun : 3 Kali sehari 1/3 sendok takar (5ml).',
            'composition' => 'Bulbus Fritillariae Cirrhosae 852 mg, Folium Eriobotryae 195 mg,Radix Adenophorae 27 mg,Poria 27 mg,Exocarpium Citri Grandis 120 mg,Radix Platycodonis 72 mg,Rhizoma Pinelliae Preparatum 27 mg, Fructus Schisandrae Chinensis 5 mg, Semen Trichosanthis 27 mg, Flos Farfarae 120 mg, Radix Polygalae 120 mg, Semen Armeniacae Amarum 21 mg, Rhizoma Zingiberis Recens 27 mg, Radix Glycyrrhizae 780 mg, Mentholum 35 mg, Aqua Armeniacae 213 mg.',
            'indication' => 'Membantu meredakan batuk berdahak dan membantu melegakan tenggorokan, serta membantu memelihara kesehatan paru-paru.',
            'description' => 'OBAT BATUK CAP IBU & ANAK SIRUP merupakan obat herbal yang digunakan untuk membantu meredakan batuk berdahak dan membantu melegakan tenggorokan, serta membantu memelihara kesehatan paru-paru.',
            'adverse_drug_reaction' => 'Pemakaian obat umumnya memiliki efek samping tertentu dan sesuai dengan masing-masing individu. Jika terjadi efek samping yang berlebih dan berbahaya, harap konsultasikan kepada tenaga medis.',
            'tags' => [2, 3],
            'drug_classification_id' => 6,
            'admin_id' => 1,
        ]);

        Drug::create([
            'image' => 'images/drugs/obat9.png',
            'name' => 'OB Herbal Junior 30 ml',
            'registration_number' => 'TR112627151',
            'dose' => 'Anak usia 6-12 tahun : 3 kali sehari 2 sendok takar (10 ml)',
            'composition' => 'Tiap 10 ml mengandung ekstrak : Zingiberis Rhizoma (2.2 g), Menthae Folia (2.173 g), Phyllanthi Herba (0.5 g), Kaempferiae Rhizoma (0.5 g), Citrus Aurantifolli Fructus (0.5 g), Thymi Herba (0.5 g), Myristicae Semen (0.25 g), Glycyrrhizae Radix (0.178 g), Madu (0.2 g).',
            'indication' => 'Menghangatkan dan melegakan tenggorokan. Membantu meredakan batuk yang disebabkan karena masuk angin.',
            'description' => 'OB HERBAL JUNIOR SIRUP merupakan obat batuk anak dengan kandungan utama Jahe, Jeruk Nipis dan Licorice yang 100% herbal. Obat ini digunakan untuk membantu meredakan batuk yang disebabkan karena masuk angin serta menghangatkan dan melegakan tenggorokan dengan rasa yang disukai anak-anak.',
            'adverse_drug_reaction' => 'Pemakaian obat umumnya memiliki efek samping tertentu dan sesuai dengan masing-masing individu. Jika terjadi efek samping yang berlebih dan berbahaya, harap konsultasikan kepada tenaga medis.',
            'tags' => [2, 3],
            'drug_classification_id' => 6,
            'admin_id' => 1,
        ]);

        Drug::create([
            'image' => 'images/drugs/obat10.png',
            'name' => 'OBH Tropica Plus Anak Rasa Strawberry Sirup 60 ml',
            'registration_number' => 'DTL0426008537A1',
            'dose' => 'Anak usia 2-5 tahun : 3 x sehari 1 sendok takar (5 ml) anak usia 6-12 tahun : 3 x sehari 2 sendok takar (10 ml).',
            'composition' => 'Succus Liquiritiae 150 mg, Acetaminophen 120 mg, Amonium Chloride 50 mg, Pseudoephedrine HCl 7.5 mg, Chlorpheniramin Maleate 1 mg.',
            'indication' => 'Membantu meredakan batuk yang disertai gejala influenza seperti demam, sakit kepala, hidung tersumbat, dan bersin-bersin.',
            'description' => 'OBH TROPICA PLUS ANAK RASA STRAWBERRY SIRUP adalah obat batuk hitam dengan rasa strawberry yang enak dan disukai anak. Obat ini digunakan untuk meredakan batuk yang disertai flu seperti demam, sakit kepala, hidung tersumbat dan bersin-bersin.',
            'adverse_drug_reaction' => 'Pemakaian obat umumnya memiliki efek samping tertentu dan sesuai dengan masing-masing individu. Jika terjadi efek samping yang berlebih dan berbahaya, harap konsultasikan kepada tenaga medis. Efek samping yang mungkin terjadi dalam penggunaan obat adalah: - Mengantuk - Insomnia - Gelisah - Eksitasi - Tremor - Takhikardia - Aritmia - Mulut kering - Retensi urin - Mual - Muntah - Diare - Konstipasi - Palpitasi.',
            'tags' => [2, 3],
            'drug_classification_id' => 2,
            'admin_id' => 1,
        ]);

        Drug::create([
            'image' => 'images/drugs/obat11.png',
            'name' => 'Hecosan Kids Herbal Cough Syrup 60 ml',
            'registration_number' => 'TR192625361',
            'dose' => '-',
            'composition' => '-',
            'indication' => '-',
            'description' => 'HECOSAN KIDS HERBAL COUGH SIRUP adalah obat batuk hitam dengan rasa strawberry yang enak dan disukai anak. Obat ini digunakan untuk meredakan batuk yang disertai flu seperti demam, sakit kepala, hidung tersumbat dan bersin-bersin.',
            'adverse_drug_reaction' => 'Pemakaian obat umumnya memiliki efek samping tertentu dan sesuai dengan masing-masing individu. Jika terjadi efek samping yang berlebih dan berbahaya, harap konsultasikan kepada tenaga medis.',
            'tags' => [2, 3],
            'drug_classification_id' => 6,
            'admin_id' => 1,
        ]);

        Drug::create([
            'image' => 'images/drugs/obat12.png',
            'name' => 'Herbakof Kids Sirup Rasa Jeruk 60 ml',
            'registration_number' => 'TR182617841',
            'dose' => 'Anak anak 2-12 tahun: 5 ml , 3 kali sehari.',
            'composition' => 'Vitex trifolia folium 333 mg Zingiber officinale rhizome 83 mg Abrus precatorius folium 83 mg Phaleria macrocarpa fructus 67 mg.',
            'indication' => 'Membantu meredakan batuk dan membantu melegakan tenggorokan pada anak.',
            'description' => 'Herbakof Kids Sirup Rasa Jeruk berisi campuran herbal alami yang memiliki manfaat untuk membantu meredakan batuk dan membantu melegakan tonggorokan pada anak.',
            'adverse_drug_reaction' => 'Pemakaian obat umumnya memiliki efek samping tertentu dan sesuai dengan masing-masing individu. Jika terjadi efek samping yang berlebih dan berbahaya, harap konsultasikan kepada tenaga medis.',
            'tags' => [2, 3],
            'drug_classification_id' => 6,
            'admin_id' => 1,
        ]);

        Drug::create([
            'image' => 'images/drugs/obat13.png',
            'name' => 'Hufagrip BP Anak Sirup 60 ml',
            'registration_number' => 'DTL0607809137A1',
            'dose' => 'Dewasa dan anak > 12 tahun : 3 x per hari, 2 sendok takar ( 10 ml). Anak (6-12 tahun) : 3 x per hari, 1 sendok takar (5 ml). Anak (2-6 tahun) : 3 x per hari, 0.5 sendok takar( 2,5 ml). Anak < 2 tahun : menurut petunjuk dokter.',
            'composition' => 'Tiap 5 ml mengandung Dextromethorphan HBr 7.5 mg, Pseudoephedrine HCl 15 mg, Chlorpheniramine Maleate 0.5 mg',
            'indication' => 'Untuk Meringankan batuk tidak berdahak dan pilek.',
            'description' => 'HUFAGRIP BP SIRUP mengandung Chlorpeniramin Maleat, Pseudoefedrin dan Dextromethorphan HBr, digunakan untuk meringankan batuk tidak berdahak dan pilek',
            'adverse_drug_reaction' => 'Pemakaian obat umumnya memiliki efek samping tertentu dan sesuai dengan masing-masing individu. Jika terjadi efek samping yang berlebih dan berbahaya, harap konsultasikan kepada tenaga medis. Efek samping yang mungkin terjadi dalam penggunaan obat adalah: mengantuk.',
            'tags' => [2, 3],
            'drug_classification_id' => 2,
            'admin_id' => 1,
        ]);

        Drug::create([
            'image' => 'images/drugs/obat14.png',
            'name' => 'Actifed Plus Expectorant Sirup 60 ml (Hijau)',
            'registration_number' => 'DTL1624504237A1',
            'dose' => 'Dewasa dan anak-anak di atas 12 tahun: 1 sendok takar (5 ml), 3 kali sehari. Anak-anak usia 6-12 tahun: 1/2 sendok takar (2,5 ml), 3 kali sehari. Tidak dianjurkan untuk anak di bawah 6 tahun.',
            'composition' => 'Tiap 5 ml sirup mengandung: Triprolidine HCl 1.25 mg, Pseudoephedrine HCl 30 mg, Guaiphenesin 100 mg, Ethanol 6.93% v/v, Sukrosa 2.50 g',
            'indication' => 'Obat ini digunakan untuk meredakan pilek dan batuk berdahak.',
            'description' => 'ACTIFED PLUS EXPECTORANT merupakan obat dengan kandungan Triprolidine HCl, Pseudoephedrine HCl, dan Guaiphenesin. Obat ini digunakan untuk meringankan pilek dan batuk berdahak. Triprolidine bekerja sebagai antagonis kompetitif untuk reseptor histamin H1 dan mampu menekan sistem saraf pusat, sehingga menyebabkan kantuk. Pseudoephedrine mempunyai aktivitas simpatomimetik langsung maupun tidak langsung dan merupakan dekongestan saluran nafas bagian atas. Guaiphenesin memiliki kerja sebagai ekspektoran, dengan menurunkan viskositas lendir dengan cara meningkatkan volume dan kandungan air dari sekresi tenggorokan, dengan demikian membantu pengeluaran sputum.',
            'adverse_drug_reaction' => 'Mengantuk, gangguan pencernaan, sakit kepala, insomnia, eksitasi, tremor, takikardi, aritmia, mulut kering, palpitasi, kesulitan berkemih.',
            'tags' => [2, 3],
            'drug_classification_id' => 2,
            'admin_id' => 1,
        ]);

        Drug::create([
            'image' => 'images/drugs/obat15.png',
            'name' => 'La Roche Posay Anthelios UV Mune 400',
            'registration_number' => 'NC14231700003',
            'dose' => '-',
            'composition' => 'Mexoryl 400: Proteksi dari Ultra Long - UVA, Sinar UV yang tersembunyi dan paling berbahaya Airlicium: Partikel kecil untuk menyerap & mengurangi sebum berlebih Powered by Netlock Technology : Melembabkan, tahan air dan keringat tanpa meninggalkan whitecast.',
            'indication' => 'Sunscreen untuk melindungi kulit dari sinar UVA+UVB. Diformulasikan untuk mengurangi kilap pada kulit yang mudah berminyak. Cocok untuk kulit yang sensitif terhadap paparan sinar matahari. Tidak menyebabkan white cast.',
            'description' => 'La Roche Posay Anthelios UV Mune 400 Oil Control Gel Cream 15 ml merupakan sunscreen untuk melindungi kulit dari sinar UVA+UVB. Hasil Matte diformulasikan untuk mengurangi kilap pada kulit yang mudah berminyak. Cocok untuk kulit yang sensitif terhadap paparan sinar matahari. Mudah diaplikasikan pada kulit, tekstur ringan, tidak lengket dan tidak berminyak. Tidak menyebabkan white cast. Berdasarkan uji konsumen pada 55 subjek selama 3 minggu: 85% mengurangi minyak pada wajah, 84% memberikan efek matte setelah pengaplikasian, 81% mengurangi sebum berlebih pada wajah.',
            'adverse_drug_reaction' => '-',
            'tags' => [4, 5],
            'drug_classification_id' => 1,
            'admin_id' => 1,
        ]);

        // Drug::create([
        //     'image' => 'images/drugs/obat16.png',
        //     'name' => '',
        //     'registration_number' => '',
        //     'dose' => '',
        //     'composition' => '',
        //     'indication' => '',
        //     'description' => '',
        //     'adverse_drug_reaction' => '',
        //     'tags' => [],
        //     'drug_classification_id' => 2,
        //     'admin_id' => 1,
        // ]);

        // Drug::create([
        //     'image' => 'images/drugs/obat17.png',
        //     'name' => '',
        //     'registration_number' => '',
        //     'dose' => '',
        //     'composition' => '',
        //     'indication' => '',
        //     'description' => '',
        //     'adverse_drug_reaction' => '',
        //     'tags' => [],
        //     'drug_classification_id' => 2,
        //     'admin_id' => 1,
        // ]);

        // Drug::create([
        //     'image' => 'images/drugs/obat18.png',
        //     'name' => '',
        //     'registration_number' => '',
        //     'dose' => '',
        //     'composition' => '',
        //     'indication' => '',
        //     'description' => '',
        //     'adverse_drug_reaction' => '',
        //     'tags' => [],
        //     'drug_classification_id' => 2,
        //     'admin_id' => 1,
        // ]);

        // Drug::create([
        //     'image' => 'images/drugs/obat19.png',
        //     'name' => '',
        //     'registration_number' => '',
        //     'dose' => '',
        //     'composition' => '',
        //     'indication' => '',
        //     'description' => '',
        //     'adverse_drug_reaction' => '',
        //     'tags' => [],
        //     'drug_classification_id' => 2,
        //     'admin_id' => 1,
        // ]);

        // Drug::create([
        //     'image' => 'images/drugs/obat20.png',
        //     'name' => '',
        //     'registration_number' => '',
        //     'dose' => '',
        //     'composition' => '',
        //     'indication' => '',
        //     'description' => '',
        //     'adverse_drug_reaction' => '',
        //     'tags' => [],
        //     'drug_classification_id' => 2,
        //     'admin_id' => 1,
        // ]);

        // Drug::create([
        //     'image' => 'images/drugs/obat21.png',
        //     'name' => '',
        //     'registration_number' => '',
        //     'dose' => '',
        //     'composition' => '',
        //     'indication' => '',
        //     'description' => '',
        //     'adverse_drug_reaction' => '',
        //     'tags' => [],
        //     'drug_classification_id' => 2,
        //     'admin_id' => 1,
        // ]);

        // Drug::create([
        //     'image' => 'images/drugs/obat22.png',
        //     'name' => '',
        //     'registration_number' => '',
        //     'dose' => '',
        //     'composition' => '',
        //     'indication' => '',
        //     'description' => '',
        //     'adverse_drug_reaction' => '',
        //     'tags' => [],
        //     'drug_classification_id' => 2,
        //     'admin_id' => 1,
        // ]);

        // Drug::create([
        //     'image' => 'images/drugs/obat23.png',
        //     'name' => '',
        //     'registration_number' => '',
        //     'dose' => '',
        //     'composition' => '',
        //     'indication' => '',
        //     'description' => '',
        //     'adverse_drug_reaction' => '',
        //     'tags' => [],
        //     'drug_classification_id' => 2,
        //     'admin_id' => 1,
        // ]);

        // Drug::create([
        //     'image' => 'images/drugs/obat24.png',
        //     'name' => '',
        //     'registration_number' => '',
        //     'dose' => '',
        //     'composition' => '',
        //     'indication' => '',
        //     'description' => '',
        //     'adverse_drug_reaction' => '',
        //     'tags' => [],
        //     'drug_classification_id' => 2,
        //     'admin_id' => 1,
        // ]);

        // Drug::create([
        //     'image' => 'images/drugs/obat25.png',
        //     'name' => '',
        //     'registration_number' => '',
        //     'dose' => '',
        //     'composition' => '',
        //     'indication' => '',
        //     'description' => '',
        //     'adverse_drug_reaction' => '',
        //     'tags' => [],
        //     'drug_classification_id' => 2,
        //     'admin_id' => 1,
        // ]);
    }
}
