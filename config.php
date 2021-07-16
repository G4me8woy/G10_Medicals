function isArrEmpty($arr){
        foreach((array)$arr as $key => $value){
            if (!empty($arr[$key])) {
                return false;
            }
        }
        return true;
    }