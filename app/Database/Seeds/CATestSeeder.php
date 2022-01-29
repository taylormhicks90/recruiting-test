<?php

namespace App\Database\Seeds;

class CATestSeeder extends \CodeIgniter\Database\Seeder
{

    public function run()
    {
        $questions = [
            [
                'question' => '<b>Choose the verb that correctly completes the sentence.</b><br/><br/>' .
                    'Have you __________ the painting yet?',
                'image' => null,
                'response_1' => 'hanged',
                'response_2' => 'hang',
                'response_3' => 'hanging',
                'response_4' => 'hung',
                'correct_response' => '4'
            ], [
                'question' => '<b>Choose the verb that correctly completes the sentence.</b><br/><br/>' .
                    'Kay ______ typing at school.',
                'image' => null,
                'response_1' => 'study',
                'response_2' => 'studies',
                'response_3' => 'studying',
                'response_4' => 'be studying',
                'correct_response' => '2'
            ],
            [
                'question' => '<b>Choose the verb that correctly completes the sentence.</b><br/><br/>' .
                    'I __________ the laughter from the conference room.',
                'image' => null,
                'response_1' => 'hear',
                'response_2' => 'hears',
                'response_3' => 'hearing',
                'response_4' => 'is hearing',
                'correct_response' => '1'
            ],
            [
                'question' => '<b>Choose the verb that correctly completes the sentence.</b><br/><br/>' .
                    'This set of books __________ on that shelf.',
                'image' => null,
                'response_1' => 'goes',
                'response_2' => 'go',
                'response_3' => 'going',
                'response_4' => 'gone',
                'correct_response' => '1'
            ],
            [
                'question' => '<b>Choose the word or phrase that best indicates the meaning of the <u>underlined</u> word.</b><br/><br/>' .
                    '<u>Hysterical</u> means:',
                'image' => null,
                'response_1' => 'out of control',
                'response_2' => 'in trouble',
                'response_3' => 'very loud',
                'response_4' => 'too difficult',
                'correct_response' => '1'
            ],
            [
                'question' => '<b>Choose the word or phrase that best indicates the meaning of the <u>underlined</u> word.</b><br/><br/>' .
                    'To <u>ignite</u> is to:',
                'image' => null,
                'response_1' => 'pay no attention',
                'response_2' => 'make fun of',
                'response_3' => 'set on fire',
                'response_4' => 'run an engine',
                'correct_response' => '3'
            ], [
                'question' => '<b>Choose the word or phrase that best indicates the meaning of the <u>underlined</u> word.</b><br/><br/>' .
                    'An <u>inaccuracy</u> is a:',
                'image' => null,
                'response_1' => 'mistake',
                'response_2' => 'type of medicine',
                'response_3' => 'prison',
                'response_4' => 'chance happening',
                'correct_response' => '1'
            ], [
                'question' => '<b>Use the completed order form above to answer the questions 8-11.</b></br>' .
                    'The item number for men\'s socks is __________',
                'image' => '/assets/img/question_images/questions_8_11.png',
                'response_1' => '541B',
                'response_2' => '412R',
                'response_3' => '271D',
                'response_4' => '768U',
                'correct_response' => '3'
            ], [
                'question' => '<b>Use the completed order form above to answer the questions 8-11.</b></br>' .
                    'The cost of one boy\'s shirt is __________',
                'image' => '/assets/img/question_images/questions_8_11.png',
                'response_1' => '$45',
                'response_2' => '$40',
                'response_3' => '$120',
                'response_4' => '$20',
                'correct_response' => '4'
            ], [
                'question' => '<b>Use the completed order form above to answer the questions 8-11.</b></br>' .
                    'The order form doesn\'t show a size for__________.',
                'image' => '/assets/img/question_images/questions_8_11.png',
                'response_1' => 'item 541B',
                'response_2' => 'item 412R',
                'response_3' => 'mens\'s socks',
                'response_4' => 'boy\'s shirt',
                'correct_response' => '2'
            ], [
                'question' => '<b>Use the completed order form above to answer the questions 8-11.</b></br>' .
                    'The color of the men\'s sweater being orderd is __________',
                'image' => '/assets/img/question_images/questions_8_11.png',
                'response_1' => 'white',
                'response_2' => 'black',
                'response_3' => 'gray',
                'response_4' => 'blue',
                'correct_response' => '4'
            ], [
                'question' => '<b>Choose the sentence that is most correctly written.</b>',
                'image' => null,
                'response_1' => 'The manager signed the register, before going to their rooms, the guests.',
                'response_2' => 'Before the register, the manager asked the rooms to sign the guest.',
                'response_3' => 'Sign the room to the manager, the guest before going to their register.',
                'response_4' => 'The manager asked the guests to sign the register before going to their rooms.',
                'correct_response' => '4'
            ], [
                'question' => '<b>Choose the sentence that is most correctly written.</b>' ,
                'image' => null,
                'response_1' => 'The car soon after the robbery speeding down Lark Street was seen.',
                'response_2' => 'Down Lark Street the car was seen after the robbery speeding soon.',
                'response_3' => 'The car was seen speeding down Lark Street soon after the robbery.',
                'response_4' => 'Speeding the car down Lark Street was seen soon after the robbery.',
                'correct_response' => '3'
            ], [
                'question' => '<b>Choose the sentence that is most correctly written.</b>',
                'image' => null,
                'response_1' => 'We impose a $10 charge for any check returned to us by the bank.',
                'response_2' => 'For any check, we impose the bank by a $10 charge returned to us.',
                'response_3' => 'For any bank, we impose by the check a $10 charge returned to us.',
                'response_4' => 'we impose to us a $10 charge for any returned by the bank check.',
                'correct_response' => '1'
            ], [
                'question' => '<b>Choose the word that best completes the sentence.</b></br>'.
                    'We waited downstairs for ten minutes. At last, the __________ arrived, and we rode it up to the tenth floor',
                'image' => null,
                'response_1' => 'bus',
                'response_2' => 'package',
                'response_3' => 'elevator',
                'response_4' => 'neighbors',
                'correct_response' => '3'
            ], [
                'question' => '<b>Choose the word that best completes the sentence.</b></br>'.
                    'Although we would like a bigger and better apartment someday, this one is _________, and we\'re satisfied' ,
                'image' => null,
                'response_1' => 'terrific',
                'response_2' => 'passable',
                'response_3' => 'dreadful',
                'response_4' => 'gigantic',
                'correct_response' => '2'
            ], [
                'question' => '<b>Choose the word that best completes the sentence.</b></br>' .
                    'We heard strange music coming from the empty house. We also saw blue lights there. It was quite _________.',
                'image' => null,
                'response_1' => 'unwise',
                'response_2' => 'expensive',
                'response_3' => 'familiar',
                'response_4' => 'mysterious',
                'correct_response' => '4'
            ], [
                'question' => '<b>Refer to the Park Mall Directory above to answer the questions 18-21.</b><br/><br/>' .
                    'The stores in the directory are listed by __________.',
                'image' => '/assets/img/question_images/questions_18_21.png',
                'response_1' => 'alphabetical order',
                'response_2' => 'size',
                'response_3' => 'location',
                'response_4' => 'store type',
                'correct_response' => '3'
            ], [
                'question' => '<b>Refer to the Park Mall Directory above to answer the questions 18-21.</b><br/><br/>' .
                    'Where is the main drinking fountain located?',
                'image' => '/assets/img/question_images/questions_18_21.png',
                'response_1' => 'inside the restroom',
                'response_2' => 'outside the children\'s clothing store',
                'response_3' => 'next to the movie theater',
                'response_4' => 'above the public phone',
                'correct_response' => '2'
            ], [
                'question' => '<b>Refer to the Park Mall Directory above to answer the questions 18-21.</b><br/><br/>' .
                    'Which two stores might you go to first to buy a birthday card',
                'image' => '/assets/img/question_images/questions_18_21.png',
                'response_1' => 'A and C',
                'response_2' => 'H and K',
                'response_3' => 'B and D',
                'response_4' => 'F and M',
                'correct_response' => '1'
            ], [
                'question' => '<b>Refer to the Park Mall Directory above to answer the questions 18-21.</b><br/><br/>' .
                    'At this mall, you could probably not buy __________.',
                'image' => '/assets/img/question_images/questions_18_21.png',
                'response_1' => 'a hamburger',
                'response_2' => 'shampoo',
                'response_3' => ' a man\'s suit',
                'response_4' => 'a bouquet of roses',
                'correct_response' => '3'
            ], [
                'question' => '<b>Choose the sentence in which the <u>underlined</u> word has the same meaning as it does in the sentence within the brackets.</b><br/><br/>' .
                    '{Spencer looks <u>fit</u> now that he jogs every day.}',
                'image' => null,
                'response_1' => 'To stay <u>fit</u>, you must eat right.',
                'response_2' => 'That piano will never <u>fit</u> in here.',
                'response_3' => 'Does that shirt still <u>fit</u> you?',
                'response_4' => 'In a <u>fit</u> of anger, I broke the plate.',
                'correct_response' => '1'
            ], [
                'question' => '<b>Choose the sentence in which the <u>underlined</u> word has the same meaning as it does in the sentence within the brackets.</b><br/><br/>' .
                    '{To make twice the number of cookies, <u>double</u> all ingredients.}',
                'image' => null,
                'response_1' => 'Tom\'s <u>double</u> to right field won the game.',
                'response_2' => 'The actor\'s <u>double</u> does the dangerous scene.',
                'response_3' => 'He said, "Please <u>double</u> the paper along the dotted line."',
                'response_4' => 'You can <u>double</u> your paycheck by working over the weekend.',
                'correct_response' => '4'
            ], [
                'question' => '<b>Choose the sentence in which the <u>underlined</u> word has the same meaning as it does in the sentence within the brackets.</b><br/><br/>' .
                    '{The dancers lined up in the <u>form</u> of a circle.}',
                'image' => null,
                'response_1' => 'We filled out an order <u>form</u> at the store.',
                'response_2' => 'The athletes will <u>form</u> a new team.',
                'response_3' => 'The basketball player shot with great <u>form</u>.',
                'response_4' => 'Her valentine card was drawn in the <u>form</u> of a heart.',
                'correct_response' => '4'
            ], [
                'question' => '<b>Choose the word that best indicates the meaning of the <u>underlined</u>word.</b><br/><br/>'.
                    'Wind, water and animals all aid in the <u>dispersion</u> of seeds, sometimes carrying them great distances.',
                'image' => null,
                'response_1' => 'destruction',
                'response_2' => 'development',
                'response_3' => 'scattering',
                'response_4' => 'recovering',
                'correct_response' => '3'
            ], [
                'question' => '<b>Choose the word that best indicates the meaning of the <u>underlined</u>word.</b><br/><br/>'.
                    'Fresh air and good food and a <u>salutary</u> effect on the sick boy, and he was soon able to get out of bed.',
                'image' => null,
                'response_1' => 'uncertain',
                'response_2' => 'healthful',
                'response_3' => 'dangerous',
                'response_4' => 'unexpected',
                'correct_response' => '2'
            ], [
                'question' => '<b>Choose the word that best indicates the meaning of the <u>underlined</u>word.</b><br/><br/>'.
                    'The newspaper story about <u>graft</u> at city hall soon forced the mayor to quit.',
                'image' => null,
                'response_1' => 'politics',
                'response_2' => 'awards',
                'response_3' => 'bribery',
                'response_4' => 'speeches',
                'correct_response' => '3'
            ], [
                'question' => '<b>Read the steps above for painting a room and then answer the question.</b><br/><br/>'.
                    'When using a roller to paint walls you should:',
                'image' => '/assets/img/question_images/questions_28_30.png',
                'response_1' => 'Paint around windows and doors last.',
                'response_2' => 'Paint in strips 3 feet wide.',
                'response_3' => 'Roll up and down in a zigzag pattern.',
                'response_4' => 'Use two coats of paint',
                'correct_response' => '3'
            ], [
                'question' => '<b>Read the steps above for painting a room and then answer the question.</b><br/><br/>'.
                    'The directions suggest paintng the ceiling first because:',
                'image' => '/assets/img/question_images/questions_28_30.png',
                'response_1' => 'Drips will matter less.',
                'response_2' => 'The lap marks are more obvious.',
                'response_3' => 'It is most difficult',
                'response_4' => 'A roller or brush can be used.',
                'correct_response' => '1'
            ], [
                'question' => '<b>Read the steps above for painting a room and then answer the question.</b><br/><br/>'.
                    'When painting with a roller, work from a dry area to a wet area because:',
                'image' => '/assets/img/question_images/questions_28_30.png',
                'response_1' => 'It uses less paint.',
                'response_2' => 'It cuts down on unnecessary movement',
                'response_3' => 'It helps to avoid lap marks.',
                'response_4' => 'It makes the roller last longer.',
                'correct_response' => '3'
            ], [
                'question' => '<b>If there is an error in one of the underlined sections below, choose the number that corresponds with that section. If there is no error choose 4.</b><br/><br/>'.
                    'The <u>San Andreas Fault, which stretches</u> 750 miles along the Californian coast <u>has caused</u> many <u>earthquakes, land</u> west of the fault slips northward about 2 inches each year',
                'image' => null,
                'response_1' => '<u>San Andreas Fault, which stretches</u>',
                'response_2' => '<u>has caused</u>',
                'response_3' => '<u>earthquakes, land</u>',
                'response_4' => '<u>No Error</u>',
                'correct_response' => '3'
            ], [
                'question' => '<b>If there is an error in one of the underlined sections below, choose the letter that corresponds with that section. If there is no error choose 4.</b><br/><br/>'.
                    '<u>How pleased i was</u> to learn that <u>your father has been choosen</u> as the new police<u>chief!</u>',
                'image' => null,
                'response_1' => '<u>How pleased i was</u>',
                'response_2' => '<u>your father has been choosen</u>',
                'response_3' => '<u>chief!</u>',
                'response_4' => '<u>No Error</u>',
                'correct_response' => '2'
            ], [
                'question' => '<b>If there is an error in one of the underlined sections below, choose the letter that corresponds with that section. If there is no error choose 4.</b><br/><br/>'.
                    'My <u>family goes</u> to the movies on <u>Sundays, and</u> sometimes <u>we go</u> out to eat afterwards',
                'image' => null,
                'response_1' => '<u>family goes</u>',
                'response_2' => '<u>Sundays, and</u>',
                'response_3' => '<u>we go</u>',
                'response_4' => '<u>No Error</u>',
                'correct_response' => '4'
            ], [
                'question' => '<b>Choose the group of words that forms a complete sentence.</b>',
                'image' => null,
                'response_1' => 'The drug store closes at 9:00 p.m. ',
                'response_2' => 'The last cattle in the valley?',
                'response_3' => 'Racing wildly toward the school bus on Route 9!',
                'response_4' => 'To finish the garage by October.',
                'correct_response' => '1'
            ], [
                'question' => '<b>Choose the group of words that forms a complete sentence.</b>',
                'image' => null,
                'response_1' => 'Another dinner of reheated leftovers!',
                'response_2' => 'Away we go.',
                'response_3' => 'A smaller puppy under the kitchen radiator.',
                'response_4' => 'To clean up the broken glass in aisle 3.',
                'correct_response' => '2'
            ], [
                'question' => '<b>Choose the group of words that forms a complete sentence.</b>',
                'image' => null,
                'response_1' => 'They’re here—the red, the blue, and the green.',
                'response_2' => 'Tall, thin models at the fashion show.',
                'response_3' => 'By the end of the summer, certainly?',
                'response_4' => 'Trying and trying to start the old lawn mower.',
                'correct_response' => '1'
            ], [
                'question' => '<b>Refer to the article above to answer questions 37-42.</b><br/><br/>'.
                    'What change if, if any, is needed in line 1?',
                'image' => '/assets/img/question_images/questions_37_42.png',
                'response_1' => 'Change <u>sheds</u> to <u>shed</u>.',
                'response_2' => 'Change <u>million</u> to <u>milion</u>.',
                'response_3' => 'Change the period to a question mark.',
                'response_4' => 'Make no change.',
                'correct_response' => '3'
            ], [
                'question' => '<b>Refer to the article above to answer questions 37-42.</b><br/><br/>'.
                    'What change if, if any, is needed in line 2?',
                'image' => '/assets/img/question_images/questions_37_42.png',
                'response_1' => 'Change <u>People\'s</u> to <u>Peoples</u>.',
                'response_2' => 'Add a comma after <u>trail</u>.',
                'response_3' => 'Change <u>immediately</u> to <u>imediately</u>',
                'response_4' => 'Make no change.',
                'correct_response' => '2'
            ], [
                'question' => '<b>Refer to the article above to answer questions 37-42.</b><br/><br/>'.
                    'What change if, if any, is needed in lines 3 and 4?',
                'image' => '/assets/img/question_images/questions_37_42.png',
                'response_1' => 'Add a comma after <u>scent</u>.',
                'response_2' => 'Change <u>it\'s</u> to <u>its</u>',
                'response_3' => 'Change <u>passes</u> to <u>pass</u>',
                'response_4' => 'Make no change.',
                'correct_response' => '2'
            ], [
                'question' => '<b>Refer to the article above to answer questions 37-42.</b><br/><br/>'.
                    'What change if, if any, is needed in line 5?',
                'image' => '/assets/img/question_images/questions_37_42.png',
                'response_1' => ' Change <u>receives</u> to <u>recieves</u>.',
                'response_2' => ' Add a comma after <u>odors</u>.',
                'response_3' => ' Change <u>larger</u> to <u>more large</u>.',
                'response_4' => 'Make no change.',
                'correct_response' => '4'
            ], [
                'question' => '<b>Refer to the article above to answer questions 37-42.</b><br/><br/>'.
                    'What change if, if any, is needed in line 6?',
                'image' => '/assets/img/question_images/questions_37_42.png',
                'response_1' => 'Remove the comma after <u>addition</u>.',
                'response_2' => 'Change <u>have</u> to <u>has</u>.',
                'response_3' => 'Change the period to a comma.',
                'response_4' => 'Make no change.',
                'correct_response' => '2'
            ], [
                'question' => '<b>Refer to the article above to answer questions 37-42.</b><br/><br/>'.
                    'What change if, if any, is needed in lines 7 and 8?',
                'image' => '/assets/img/question_images/questions_37_42.png',
                'response_1' => 'Add a comma after <u>Overall</u>.',
                'response_2' => 'Change <u>scent</u> to <u>sent</u>.',
                'response_3' => 'Change <u>than</u> to <u>then</u>.',
                'response_4' => 'Make no change.',
                'correct_response' => '1'
            ], [
                'question' => '<b>Choose the sentence that best joins the sequence of events listed below without omitting any details or changing the meaning.</b><br>'.
                    '<ol>'.
                        '<li>Rita lost her job last May.</li>'.
                        '<li>She was on unemployment for three months.</li>'.
                        '<li>Her new job begins in November.</li>'.
                    '</ol>',
                'image' => null,
                'response_1' => 'Rita lost her job last May and was on unemployment; her new job begins in three months in November. ',
                'response_2' => 'After losing her job last May, Rita was on unemployment for three months until her new job began in November.',
                'response_3' => 'When Rita’s new job begins in November, she will have been on unemployment for three months; she lost her job in May',
                'response_4' => ' Last May, Rita lost her job and was on unemployment for three months; her new job begins in November. ',
                'correct_response' => '4'
            ], [
                'question' => '<b>Choose the sentence that best joins the sequence of events listed below without omitting any details or changing the meaning.</b><br>'.
                    '<ol>'.
                        '<li>I removed the old wallpaper.</li>'.
                        '<li>I washed the plaster walls.</li>'.
                        '<li>I patched the cracks.</li>'.
                    '</ol>',
                'image' => null,
                'response_1' => 'I removed and washed the old wallpaper and plaster walls; then I patched the cracks.',
                'response_2' => 'I removed the old wallpaper, and I washed and patched the cracks in the plaster walls.',
                'response_3' => 'I removed the old wallpaper, washed the plaster walls, and patched the cracks.',
                'response_4' => 'I removed the cracks, washed the plaster walls, and patched the old wallpaper.',
                'correct_response' => '3'
            ], [
                'question' => '<b>Choose the sentence that best joins the sequence of events listed below without omitting any details or changing the meaning.</b><br>'.
                    '<ol>'.
                        '<li>Chris put water in a glass jar.</li>'.
                        '<li>He put the jar in the freezer.</li>'.
                        '<li>The water froze solid and the jar cracked.</li>'.
                    '</ol>',
                'image' => null,
                'response_1' => 'A glass jar with water in it cracked after Chris put it in the freezer and it froze solid.',
                'response_2' => 'Chris put water in a glass jar and put the jar in the freezer; the water froze solid and cracked the jar.',
                'response_3' => 'A glass jar cracked because Chris put it in water in the freezer and the water froze solid.',
                'response_4' => 'Chris put water in a glass jar, put it in the freezer, and it cracked.',
                'correct_response' => '2'
            ], [
                'question' => '<b>Read the news story above then answer the questions 46-50.</b>'.
                    'Where is the Batteau House located? ',
                'image' => '/assets/img/question_images/questions_46_50.png',
                'response_1' => 'Middleton',
                'response_2' => 'Dows Lake',
                'response_3' => 'Sheldon Park',
                'response_4' => 'Makepeace',
                'correct_response' => '3'
            ], [
                'question' => '<b>Read the news story above then answer questions 46-50.</b>'.
                    'What does Harvey House feature?',
                'image' => '/assets/img/question_images/questions_46_50.png',
                'response_1' => 'a solar system to heat hot water',
                'response_2' => 'an underground heat storage battery',
                'response_3' => '12 solar energy collectors per unit',
                'response_4' => 'original solar ceiling windows',
                'correct_response' => '2'
            ], [
                'question' => '<b>Read the news story above then answer the questions 46-50.</b>'.
                    'The main purpose for the tour is probably to __________. ',
                'image' => '/assets/img/question_images/questions_46_50.png',
                'response_1' => 'popularize solar energy',
                'response_2' => 'help owners of solar homes sell their property',
                'response_3' => 'have an outing on a sunny day',
                'response_4' => 'raise money to build a solar home',
                'correct_response' => '1'
            ], [
                'question' => '<b>Read the news story above then answer the questions 46-50.</b>'.
                    'Which of the following is the best title for this article?',
                'image' => '/assets/img/question_images/questions_46_50.png',
                'response_1' => 'Dr. Batteau Wins Solar Design Awards',
                'response_2' => 'Day-Long Tour to Begin at 8:00 a.m.',
                'response_3' => 'Tour to Feature Area Solar Homes',
                'response_4' => 'Middleton Gets 100 Solar-Powered Apartments',
                'correct_response' => '3'
            ], [
                'question' => '<b>Read the news story above then answer the questions 46-50.</b>'.
                    'Which of the following statements from the article is an opinion? ',
                'image' => '/assets/img/question_images/questions_46_50.png',
                'response_1' => 'Twelve solar energy collectors per unit provide most of the hot water and space heating.',
                'response_2' => 'Reservations can be made by calling 555-9809.',
                'response_3' => 'The group will also stop at the Batteau House in Sheldon Park and the Dows Lake Middle School. ',
                'response_4' => 'Kenwood has long been a leader in creative housing.',
                'correct_response' => '4'
            ],
        ];
        $x = 1;
        foreach ($questions as $question){
            $question['id'] = $x;
            $this->db->query('INSERT INTO ca_test_questions (id,question,image,response_1,response_2,response_3,response_4,correct_response) VALUES (:id:,:question:,:image:,:response_1:,:response_2:,:response_3:,:response_4:,:correct_response:)',$question);
            $x++;
        }
    }

}