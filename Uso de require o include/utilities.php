<?php

function availability( $is_available )
{
  if( $is_available  )
                {
                  echo 'Si';
                }else
                {
                  echo 'No';
                }
}

function say_year()
{
  return date('Y');
}