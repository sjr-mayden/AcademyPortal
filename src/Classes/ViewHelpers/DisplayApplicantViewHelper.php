<?php

namespace Portal\ViewHelpers;

use \Portal\Entities\ApplicantEntity;

class DisplayApplicantViewHelper
{
    /**
     * Concatenates new applicant's name, email and cohort to join ready to be output.
     *
     * @param $applicants
     *
     * @return string $result, returns name, email, cohortID and all the data for the applicant.
     */
    static public function displayApplicants($applicants)
    {

        $result = '';
        foreach ($applicants as $applicant) {
            if ($applicant instanceof ApplicantEntity) {
                $result .= '<strong>Name:</strong> ' . $applicant->getName() . '<strong> Email:</strong> ' .  $applicant->getEmail() . '<strong> Date Applied To:</strong> ' . $applicant->getCohortDate() . '<br>';
            }
        }
        return ($result);
    }
}
