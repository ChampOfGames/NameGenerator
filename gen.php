<?php

class name
{
    /**
     * Get names from the name lists
     * @param int $part
     * @return array | bool
     */
    private function getNames($part = 0)
    {
        switch ($part) {
            case 0:
                return json_decode(file_get_contents("names.json"), true);
                break;
            case 1:
                return json_decode(file_get_contents("extras.json"), true);
                break;
        }
        return false;
    }

    /**
     * Generate random name
     * @param int $parts
     * @param string $gender
     * @param string $other
     * @param bool $number
     * @return false|mixed|string
     */
    public function generateName($parts = 2, $gender = "random", $other = "random", $number = false)
    {
        $names = $this->getNames(0);
        $extra = $this->getNames(1);
        $endnumber = "";
        $genders = array("girl", "boy", "random");
        if (!in_array($gender, $genders)) {
            return false;
        }
        if ($number === true) {
            $endnumber = mt_rand(0, 10000);
        }
        $genders = array("boy", "girl");
        $extras = array("fruits", "other");
        if ($parts === 1) {
            if ($gender === "random") {
                $rgender = $genders[rand(0, 1)];
                $rname = rand(0, sizeof($names[$rgender]));
                return $names[$rgender][$rname] . $endnumber;
            } else {
                $rname = rand(0, sizeof($names[$gender]));
                return $names[$gender][$rname] . $endnumber;
            }
        } else if ($parts === 2) {
            if ($gender === "random") {
                $rgender = $genders[rand(0, 1)];
                if ($other = "random") {
                    $random = $extras[mt_rand(0, 1)];
                    $rname1 = rand(0, sizeof($extra[$random]));
                    $rname2 = rand(0, sizeof($names[$rgender]));
                    return $extra[$random][$rname1] . $names[$rgender][$rname2] . $endnumber;
                } else if ($other === "fruits" || $other === "other") {
                    $rname1 = rand(0, sizeof($extra[$other]));
                    $rname2 = rand(0, sizeof($names[$rgender]));
                    return $extra[$other][$rname1] . $names[$rgender][$rname2] . $endnumber;
                }
            } else {
                $random = $extras[mt_rand(0, 1)];
                $rname1 = rand(0, sizeof($extra[$random]));
                $rname2 = rand(0, sizeof($names[$gender]));
                return $extra[$random][$rname1] . $names[$gender][$rname2] . $endnumber;
            }
        } else {
            return false;
        }
    }
}
