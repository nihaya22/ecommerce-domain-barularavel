use App\Models\DomainExtension;

public function run(): void
{
    $domains = [
        // Global
        ['.com','Global'],
        ['.net','Global'],
        ['.org','Global'],
        ['.info','Global'],
        ['.biz','Global'],
        ['.online','Global'],
        ['.site','Global'],
        ['.website','Global'],
        ['.app','Global'],
        ['.tech','Global'],
        ['.store','Global'],
        ['.blog','Global'],
        ['.digital','Global'],
        ['.cloud','Global'],
        ['.xyz','Global'],

        // Indonesia
        ['.id','Indonesia'],
        ['.co.id','Indonesia'],
        ['.or.id','Indonesia'],
        ['.sch.id','Indonesia'],
        ['.ac.id','Indonesia'],
        ['.go.id','Indonesia'],
        ['.desa.id','Indonesia'],
        ['.my.id','Indonesia'],
        ['.biz.id','Indonesia'],
        ['.web.id','Indonesia'],

        // Negara
        ['.us','Negara'],
        ['.uk','Negara'],
        ['.au','Negara'],
        ['.sg','Negara'],
        ['.jp','Negara'],
        ['.my','Negara'],
        ['.de','Negara'],
        ['.fr','Negara'],
    ];

    foreach ($domains as $d) {
        DomainExtension::create([
            'extension' => $d[0],
            'category' => $d[1],
            'price' => 150000,
            'is_active' => true,
        ]);
    }
}
