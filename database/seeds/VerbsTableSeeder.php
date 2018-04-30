<?php

use Illuminate\Database\Seeder;
use App\Verb;

class VerbsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $verbs = [
            ['absent', 'liban', 'lumiban', 'lumiliban', 'liliban', '休む (やすみ)'],
            ['abuse', 'abuso', 'umabuso', 'umaabuso', 'aabuso', '乱用する（らんようする)'],
            ['accept', 'tanggap', 'tumanggap', 'tumatanggap', 'tatanggap', '受け入れる（うけいれる)'],
            ['accuse', 'akusa', 'nag-akusa', 'nang-aakusa', 'mang-aakusa', '争い訴える（あらそいうったえる)'],
            ['acquire', 'kuha', 'kumuha', 'kumukuha', 'kukuha', 'もらう'],
            ['add', 'dagdag', 'nagdagdag', 'nagdaragdag', 'magdaragdag', '加える（くわえる)'],
            ['advance (forward)', 'sulong', 'sumulong', 'sumusulong', 'susulong', '進む (すすむ)'],
            ['angry (to be angry)', 'galit', 'nagalit', 'nagagalit', 'magagalit', '起こる (おこる)'],
            ['angry (to make someone)', 'galit', 'nanggalit', 'nanggagalit', 'manggalit', 'N/A'],
            ['angry (scold someone)', 'galit', 'pinagalitin', 'pinapapagalitan', 'papagalitan', 'しかる'],
            ['annoy (someone)', 'inis', 'nang-inis', 'nang-iinis', 'mang-iinis', '迷惑をかける (めいわくをかける)'],
            ['approach', 'lapit', 'lumapit', 'lumalapit', 'lalapit', '近づく (ちかづく)'],
            ['arrive', 'dating', 'dumating', 'dumarating', 'darating', 'くる'],
            ['ask for (something)', 'hingi', 'humingi', 'humihingi', 'hihingi', '頼む (たのむ)'],
            ['ask about', 'tanong', 'nagtanong', 'nagtatanong', 'magtatanong', 'きく'],
            ['assume', 'akala', 'nag-akala', 'nag-aakala', 'mag-aakala', 'N/A'],
            ['attack', 'lusob', 'lumusob', 'lumulusob', 'lulusob', '襲う (おそう)'],
            ['attend', 'dalo', 'dumalo', 'dumadalo', 'dadalo', '出る (でる)'],
            ['attention(give)', 'pansin', 'napansin', 'napapansin', 'mapapansin', '注目(ちゅうもくする)'],
            ['attract', 'akit', 'naakit', 'naaakit', 'maaakit', 'ひく'],
            ['avoid', 'layó', 'lumayó', 'lumalayó', 'lalayó', 'さく'],
            ['bad (to become)', 'samá', 'sumamá', 'sumasamá', 'sasamá', 'N/A'],
            ['ban', 'bawal', 'nagbawal', 'nagbabawal', 'magbabawal', '禁じる (きんじる)'],
            ['begin', 'umpisa', 'nag-umpisa', 'nag-uumpisa', 'mag-uumpisa', '始める(はじめる)/始る(はじまる)'],
            ['believe', 'niwala', 'naniwala', 'naniniwala', 'maniniwala', '信じる (しんじる)'],
            ['big (to become)', 'laki', 'lumaki', 'lumalaki', 'lalaki', '太る (ふとる)'],
            ['big (to make it)', 'laki', 'nilakihan', 'nilalakihan', 'lalakihan', 'N/A'],
            ['birth (to give birth)', 'anak', 'nanganak', 'nanganganak', 'manganganak', 'うむ'],
            ['bite', 'kagat', 'kumagat', 'kumakagat', 'kakagat', '噛む (かむ)'],
            ['boil', 'laga', 'naglaga', 'naglalaga', 'maglalaga', '沸く (わく)'],
            ['borrow', 'hiram', 'humiram', 'humihiram', 'hihiram', '借りる (かりる)'],
            ['borrow(money)', 'utang', 'umutang', 'umuutang', 'uutang', 'N/A'],
            ['break', 'sirá', 'sumirá', 'sumisirá', 'sisirá', '切れる'],
            ['break(glassware)', 'basag', 'nagbasag', 'nagbabasag', 'magbabasag', 'N/A'],
            ['break(tear)', 'punit', 'pumunit', 'pumupunit', 'pupunit', 'やぶる'],
            ['break(long objects)', 'balí', 'bumalí', 'bumabalí', 'babalí', 'N/A'],
            ['break(out of order)', 'sirá', 'nagsirá', 'nagsisirá', 'magsisirá', 'N/A'],
            ['break (irreparable)', 'wasak', 'nagwasak', 'nagwawasak', 'magwawasak', 'N/A'],
            ['breathe', 'hinge', 'humina', 'humihinga', 'hihinga', '息をする, (いきをする)']

        ];

        $count = count($verbs);

        foreach ($verbs as $key => $verbData) {
            $verb = new Verb();

            $verb->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $verb->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
            $verb->englishTranslation = $verbData[0];
            $verb->filipinoRootTranslation = $verbData[1];
            $verb->filipinoPastTenseTranslation = $verbData[2];
            $verb->filipinoPresentTenseTranslation = $verbData[3];
            $verb->filipinoFutureTenseTranslation = $verbData[4];
            $verb->japaneseRootTranslation = $verbData[5];

            $verb->save();
            $count--;
        }
    }
}
