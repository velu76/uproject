<?php

use Illuminate\Database\Seeder;

class ListTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$sources = array(
    		'Direct Invitation from Clients', 
    		'Request from Partners', 
    		'GMAPS Staff Contacts', 
    		'Singapore-GeBIZ (Direct Bid)', 
    		'Singapre-GeBIZ(Join Bid)', 
    		'ADB', 
    		'WBG',
    		'International Bank Group',
    		'Overseas Port Organizations'
    	);

    	$statuses = array(
    		'Project Confirmed', 
    		'Project in Progress', 
    		'Project Complete-Open', 
    		'Project Complete-Closed', 
    		'Proposal Preparation', 
    		'Proposal Submitted', 
    		'Project Negotiation',
    		'Proposal Closed',
    		'EOI Preparation',
    		'EOI Closed',
    		'Business Development',
    		'PQ Preparation',
    		'PQ Submitted',
    		'On Hold',
    		'KIV',
    		'COLD',
    		'Closed',
    		'Others',
    	);

    	$categories = array(
    		'Market Study / Feasibility Study', 
    		'Planning', 
    		'Engineering', 
    		'PPP/Financial', 
    		'Marine', 
    		'Operations',
    		'Regulatory / Legal',
    		'Training',
    		'IT / 3D Rendering'    		
    	);
       
       	// Statuses
        foreach($statuses as $status) {
        	DB::table('statuses')->insert([
        		'text' => $status,
        		'created_at' => new DateTime('now'),
        		'updated_at' => new DateTime('now') 	
        	]);
        }

        // Sources
        foreach($sources as $source) {
        	DB::table('sources')->insert([
        		'text' => $source,
        		'created_at' => new DateTime('now'),
        		'updated_at' => new DateTime('now') 		
        	]);
        }

        // Categories
        foreach($categories as $category) {
        	DB::table('categories')->insert([
        		'text' => $category,
        		'created_at' => new DateTime('now'),
        		'updated_at' => new DateTime('now') 		
        	]);
        }                        
    }
}
