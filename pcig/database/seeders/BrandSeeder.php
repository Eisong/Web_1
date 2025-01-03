<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Brand::truncate();

      $brands = [
          [
          'b_name'=>'Petterson Clor Integrated Services',
          'b_image'=>'',
          'b_detail'=>'
          <h1 class="text-dark"><strong>PC Integrated Services Limited</strong></h1>
            <br/>
          PC Integrated Services Limited is a fully owned subsidiary of PCIG and is a major indigenous player in the upstream, midstream and downstream sub-sectors of Nigeria\'s oil and gas sectorThe company was established in 2005 as special purpose vehicle to provide professional 
          engineering and technical services to oil majors in the nation\'s 
          petroleum industry. With outstanding performance and superior stakeholder value consolidation in the 
          few years of existence, the company has grown to become one of the leading indigenous professionalservices
           firm servicing the oil gas industry in Nigeria.
          <br/>
          PCI has a specially diversified portfolio in Nigeria\'s energy sector which includes exploration, 
          crude oil trade and facilitation, technical procurement, engineering and project management. PCI has also diversified its portfolio and service offerings to include, downstream petroleum marketing and installed refineries turn around maintenance services.
          <br/>
          What we do:<br/>
          <ul>
          <li>Crude oil Exploration</li>
          <li>Crude trade and facilitation</li>
          <li>Technical Procurement</li>
          <li>Project management (Engineering and Construction)</li>
          <li>Turnaround maintenance services</li>
          </ul>',
          'b_logo'=>'',
          'category'=>'energy'
          ],
          [
            'b_name'=>'Petterson Clor Energy Solutions',
            'b_image'=>'',
            'b_detail'=>'
            <h1 class="text-dark"><strong>Petterson Clor Energy Solutions Limited</strong></h1>
            <br/>
            Petterson Clor Energy Solutions is an alternative energy premium solutions provider. The company is a proud member of the PCIG conglomerate. It specializes in the design development and installation of electricity generating Wind farms, bio-fuel production and trading. The company is also an industry leader in the provision of solar energy solutions for industries, small businesses and households.
            <br/>
            Petterson Clor Energy Solutions is at the fore of Nigeria\'s indigenous efforts aimed at exploring alternative energy solutions to both compliment and consolidate on the gains of the Nigerian government to tackle and effectively arrest the subsisting high demand for electricity and the dismal availability of the commodity.
            <br/>
         What we do:<br/>
            <ul>
          <li>Alternative Energy solutions consultancy</li>
          <li>Solar power design, production and installation</li>
          <li>Wind Farm design, production and installation</li>
          </ul>
            ',
            'b_logo'=>'',
            'category'=>'energy'
            ],
            [
                'b_name'=>'Petterson Clor International',
                'b_image'=>'',
                'b_detail'=>'
                <h1 class="text-dark"><strong>Petterson Clor International (NIG) Limited</strong></h1>
                <br/>
                PCIL is the first member and flagship company of the group spearheading the growth, development and advancement of the group\'s corporate objectives; the company was registered on the 31st of July 1990 as a private limited liability company with CAC registration number RC 152661.
                <br/>
                With core expertise in healthcare systems procurement, development and consultancy; PCINL specializes in the service provision of highly specialized turnkey projects for the healthcare sector. Furthermore PCINL is Nigeria and West Africa\'s leading public procurement powerhouse and the premium choice of the federal and most state governments in the country for the acquisition of highly specialized medical and healthcare equipment.
                <br/>
                What we do:<br/>
            <ul>
          <li>Franchised distributorship of Medical equipment</li>
          <li>Healthcare Turnkey Project design and management</li>
          <li>Healthcare systems development and consultancy</li>
          <li>General Healthcare equipment providers</li>
          </ul>
                ',
                'b_logo'=>'',
                'category'=>'healthcare'
                ],
                [
                    'b_name'=>'Petterson Clor Pharmaceuticals',
                    'b_image'=>'',
                    'b_detail'=>'
                    <h1 class="text-dark"><strong>Petterson Clor Pharmaceuticals Limited</strong></h1>
                    <br/>        
                    Petterson Clor Pharmaceuticals is a company established with the sole purpose of manufacturing licensed internationally accepted medical and pharmaceutical brands ranging from drugs, medical compounds, bio-gases, surgical kits and implements.
                    <br/>
                    The company is also into manufacturing and distribution of its own brand of healthcare equipment and is the proud owner of Mediclor® brand which comprises a range of quality healthcare equipment and apparatuses.
                    <br/>
                    What we do:<br/>
                    <ul>
                  <li>Localized manufacturing of licensed drugs</li>
                  <li>Sole representation and distribution of global Medical brands</li>
                  <li>Indigenous medical equipment manufacturing</li>
                  </ul>
                    ',
                    'b_logo'=>'',
                    'category'=>'healthcare'
                    ],
                    [
                        'b_name'=>'Petterson Clor Dongo Farms',
                        'b_image'=>'',
                        'b_detail'=>'
                        <h1 class="text-dark"><strong>Petterson Clor Dongo Farms Limited</strong></h1>
                           <br/> 
                        Our expansive farms are located in premium arable land; and each farm is catered for and optimized to grow and harvest cash crops for both the local and export market. In addition our processing factories are designed to positively exploit the agro-allied value chain to produce both semi-finished products for further processing and finished products ready for market consumption.
                        <br/>
                        What we do:<br/>
                        <ul>
                      <li>Research, development, innovation of agro-allied technologies.</li>
                      <li>Development of new Agro business models.</li>
                      <li>Development of new production and conservation procedures.</li>
                      <li>Development of new production and conservation procedures.</li>
                      <li>Marketing and Internationalization of local farm produce.</li>
                      </ul>
                        ',
                        'b_logo'=>'',
                        'category'=>'agriculture'
                        ],
                        [
                            'b_name'=>'NECII',
                            'b_image'=>'',
                            'b_detail'=>'
                            <h1 class="text-dark"><strong>National Economic Cluster Initiative For Industrialization. (NECII)</strong></h1>
                            <br/>
                            The NECII development Project is an economic intervention initiative designed to both intervene and provide lead for all existing economic development programs through initiation and evolution of innovative and rapid industrialization of identified sectors of the Nigerian economy. NECII is designed to provide enterprise and technological strategies targeted at catalyzing and driving growth and development of Nigeri\'s emerging economic potentials inherent in the identified sectors by integrating them into global value chains
                            <br/>
                            The project is earmarked to increase the inflow of foreign direct investment into the national economy to the tune of 400 million dollars (USD) and increase the transfer of technological knowledge and global enterprise practices to indigenous manpower.
                            <br/>
                            One principal goal of NECII is to make available to indigenous enterprise the tools, strategies and environment to competitively grow and assume their lead in providing both leadership and direction for the growth and development of the Nation\'s economy.
                            <br/>
                            NECII focal areas:<br/>
                        <ul>
                      <li>Agro-allied parks.</li>
                      <li>Medical parks.</li>
                      <li>Specialized enterprise technology development institutes.</li>
                      </ul>
                            ',
                            'b_logo'=>'',
                            'category'=>'infrastructure'
                            ],  
                            
                            [
                                'b_name'=>'ECOGROW',
                                'b_image'=>'',
                                'b_detail'=>'
                                <h1 class="text-dark"><strong>ECOGROW</strong></h1>
                                <br/>
                                ECOGROW is the economic growth initiative of PCIG aimed at the positive exploration and exploitation of the diverse national and regional economies of African countries specifically western and southern Africa. ECOGROW is earmarked to invest a total of 100 million dollars in key African countries in 5 years beginning from 2013. Target economic sectors include healthcare, agriculture, manufacturing and manpower development.
                                <br/>
                                The project is being operated in both direct and indirect collaboration with the governments and key private economic players of the national economies of African countries. PCIG and its network of global partners are deeply committed to inputting both financial, technical and strategic resources geared towards making the ECOGROW projects the prime model for intra-regional economic cooperation in Africa
                                <br/>
                                The ECOGROW projects are focused on investing in specific sectors of the recipient economies with a view to propel growth and catalyze increased engagement in the identified sectors.
                                <br/>
                                ECOGROW focal Areas:<br/>
                                <ul>
                              <li>Sector Specific Intervention Initiatives.</li>
                              <li>Virgin sector prospecting initiatives.</li>
                              <li>Industrial expansion initiatives.</li>
                              </ul>
                                ',
                                'b_logo'=>'',
                                'category'=>'infrastructure'
                                ],
                                [
                                    'b_name'=>'Petterson Clor Global Institute',
                                    'b_image'=>'',
                                    'b_detail'=>'
                                    <h1 class="text-dark"><strong>Petterson Clor Global Institute for Job and Wealth creation (Limited by Guarantee).</strong></h1>
                                <br/>
                                In keeping with the desire of the federal government to develop localized technical capacity and the creation of a supportive environment that encourages job opportunities and wealth creation. The PCGIJWC is the training and capacity building arm of the Group. The organization is limited by guarantee and is In strategic partnership with Empowerment Plus, USA, PCGIJWC provides quality training and capacity building for both public and private sector clients in various areas including governance, bioengineering, public procurement, policy and strategy, entrepreneurship and leadership.
                                <br/>
                                The PCGIJWC is poised to become the premier national manpower training institution for Nigeria and West Africa and is ready to take on the onerous responsibility for delivering career-related jobs, education and training for Nigeria and international clients. PCGIJWC has a unique expertise in delivering cost effective and inclusive, technical/professional skills training systems that integrate and meet the needs of the diverse ethnic, linguistic, cultural and social communities of the country. This underscores the Institute\'s strong commitment to rural development, jobs provision, education and training opportunities that are accessible and relevant to rural labour markets, economic growth and development of the nation.
                                <br/>
                                What we do:<br/>
                                <ul>
                              <li>Manpower training and development.</li>
                              <li>Research, development, innovation and technology.</li>
                              <li>Regional and national outsourcing services.</li>
                              <li>Certification and qualification training.</li>
                              </ul>
                                    ',
                                    'b_logo'=>'',
                                    'category'=>'manpower and development'
                                    ],
                                    [
                                        'b_name'=>'Caring for citizens foundation',
                                        'b_image'=>'',
                                        'b_detail'=>'
                                        <h1 class="text-dark"><strong>Caring for Citizens Foundation</strong></h1>
                                        <br/>
                                        The Caring for Citizens Foundation is non-governmental vehicle designed specially to intervene in the marked areas of poverty eradication and youth empowerment. it is an initiative of PCIG. The initiative targets young people between the ages of 18 - 35 with a view to providing them with crucial life skills including vocational and business venture skills. The program also engages public institutions responsible for youth welfare, 
                                        with a view to evolving relevant and sustainable strategies for attaining youth empowerment.
                                        <br/>
                                        Our Objectives:<br/>
                                        <ul>
                                      <li>Poverty eradication in Nigeria.</li>
                                      <li>Youth economic empowerment.</li>
                                      <li>Sustainable strategy development for youth empowerment.</li>
                            
                                      </ul>
                                           
                                        ',
                                        'b_logo'=>'',
                                        'category'=>'manpower and development'
                                        ],
                                        [
                                            'b_name'=>'Petterson Dongo Foundation',
                                            'b_image'=>'',
                                            'b_detail'=>'
                                            <h1 class="text-dark"><strong>Petterson Dongo Foundation</strong></h1>
                                        <br/>
                                        Petterson Doingo Foundation (PDF) is a Non-governmental organization based in Nigeria. The foundation is a non-profit making organization with a team of Nigerians positioned both locally and in the diaspora and set to improve the economic, social and technological sectors of Nigeria through carefully planned strategic intervention programs, to enable it compete more favourably in the global market space, and generally to improve the lives and well-being of Nigerians.
                                        <br/>
                                        The core values of the foundation reflect the undying nationalistic convictions of its instigator, and informs our organisational objectives stated below.
                                        <br/>
                                        Our Objectives:<br/>
                                        <ul>
                                      <li>To attract, stimulate and promote socio economic and technological investment in Nigeria through Foreign Development initiatives (FDI\'s).</li>
                                      <li>To eradicate poverty and under-development by promoting deeper integration of Nigerians into the global economic system etc.</li>
                                      <li>Economic empowerment of the youth population of Nigeria.</li>
                            
                                      </ul>
                                            ',
                                            'b_logo'=>'',
                                            'category'=>'manpower and development'
                                            ]
                                
      ];

      Brand::insert($brands);
    }
}
