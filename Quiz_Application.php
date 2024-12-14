<?php 

// Example questions
$questions = [ 
    ['question' => 'What is 2 + 2?', 'correct' => '4'], 
    ['question' => 'What is the capital of France?', 'correct' => 'Paris'], 
    ['question' => 'Who wrote "Hamlet"?', 'correct' => 'Shakespeare'], 
    ['question' => 'What is the square root of 144?', 'correct' => '12'], 
    ['question' => 'What is the largest planet in our solar system?', 'correct' => 'Jupiter'], 
];

// Collect answers from the user
$answers = []; 
foreach ($questions as $index => $question) { 
    echo ($index + 1) . ". " . $question['question'] . "\n"; 
    $answers[] = trim(readline("Your answer: ")); 
}

// Function for evaluate the quiz 
function evaluateQuiz(array $questions, array $answers): int { 
    $score = 0; 
    foreach ($questions as $index => $question) { 
        if ($answers[$index] === $question['correct']) { 
            $score++; 
        } 
    } 
    return $score; 
}

// Calculate score and give feedback 
$score = evaluateQuiz($questions, $answers); 

echo "\nYou scored $score out of " . count($questions) . ".\n"; 

if ($score === count($questions)) { 
    echo "Excellent job! You are pro. \n"; 
}elseif ($score >= 3) { 
    echo "Good effort! You are Avarage. \n"; 
}else { 
    echo "Better luck next time!\n"; 
}

?>