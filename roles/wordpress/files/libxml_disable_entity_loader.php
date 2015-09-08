<?php
    # reference: http://websec.io/2012/08/27/Preventing-XEE-in-PHP.html
    # this is not a complete fix since we also need to ensure that "LIBXML_NONET" is passed in to the
    # relevant function calls but it's better than nothing
    libxml_disable_entity_loader(true);

