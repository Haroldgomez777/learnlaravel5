
<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'harold',
            'email' => 'haroldgomez40@gmail.com',
            'role_id' => '1',
            'password' => bcrypt('123123123'),
        ]);

        DB::table('users')->insert([
            'name' => 'manager',
            'email' => 'haroldmanager40@gmail.com',
            'role_id' => '3',
            'password' => bcrypt('123123123'),
        ]);

        DB::table('users')->insert([
            'name' => 'customer',
            'email' => 'haroldcustomer40@gmail.com',
            'password' => bcrypt('123123123'),
        ]);

        Model::unguard();
        $this->call(RolesTableSeeder::class);
        Model::reguard();
        
    }

}